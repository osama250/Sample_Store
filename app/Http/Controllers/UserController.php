<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Collection\modelKeys;
use App\User;
use App\profile_users;


class UserController extends Controller
{

    public function index()
    {
        $users = User::orderBy('created_at','desc')->where('is_admin' , 0 )->get();
        return view('admin.users.index' , compact('users') );
    }

    public function trashedUsers()
    {
        $users = User::onlyTrashed()->where('is_admin', 0)->latest()->get();
        return view('admin.users.trash', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
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
            'is_admin'      => 0
          ]);

            $profile = profile_users::create([
                'adress'      => 'Default Cairo-Madia User Updated',
                'phone'       => '+02 User Updated',
                'gender'      => 'Male User Updated',
                'city'	      => 'cairo User Updated',
                'user_id'	  => $user->id,
            ]);

          return redirect()->route('Users.index')->with('success','User Added');
    }

    public function show($id)
    {
        $user      = User::find($id);
        $reviews   = $user->user_reviews;
        $orders    = $user->my_orders;
        return view('admin.users.show' , compact('user' , 'reviews' , 'orders'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function softDelete($id)
    {
        $user = User::find($id);
        if ( $user->id != 1 && $user->profile != null && $user->user_reviews != null )
        {
            $user->delete();
            $user->profile->delete();
            $user->user_reviews()->delete();
            return redirect()->route('Users.index')->with('success','User Deleted');
        }
    }

    public function backFromSoftDelete($id)
    {
        $type = User::onlyTrashed()->where('id' , $id)->first()->restore();
        return redirect()->route('Users.index')->with('success',' Done User back');
    }
}
