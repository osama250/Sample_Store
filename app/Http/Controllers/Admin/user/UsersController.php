<?php

namespace App\Http\Controllers\Admin\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Models\profile_users;

class UsersController extends Controller
{

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
