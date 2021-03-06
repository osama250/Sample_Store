<?php

namespace App\Http\Controllers\Admin\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Models\profile_users;

class AdminController extends Controller
{

    public function create()
    {
        return view('admin.admins.create');
    }

    public function store(Request $request)
    {
        $this->validate($request , [
            'name'       => ['required', 'string', 'max:255'],
            'email'      => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'   => ['required', 'string', 'min:8', 'confirmed'],
           ]);

          $user =  User::create([
            'name'          => $request->name ,
            'email'         => $request->email ,
            'password'      => Hash::make($request->password ),
            'is_admin'      => 1
          ]);

            $profile = profile_users::create([
                'adress'      => 'Default Cairo-Madia',
                'phone'       => '+02',
                'gender'      => 'Male',
                'city'	      => 'cairo',
                'user_id'	  => $user->id,
            ]);

          return redirect()->route('Admins.index')->with('success','Admin Added');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if ( $user->id != 1 && $user->profile != null ) {
           $user->delete();
           $user->profile->delete($id);
           return redirect()->route('Admins.index')->with('success','Admin Deleted');
        }
    }
}
