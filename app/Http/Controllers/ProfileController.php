<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\profile_users;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user       = Auth::user();
        $id         =  Auth::id();
        if ( $user->profile == null ) {                           // profile function find in user model
            $profile = profile_users::create([
                'adress'     =>  'Create Profile Now',
                'phone'      =>  '01092607753',
                'gender'     =>  'Male' ,
                'city'       =>  'Giza' ,
                'user_id'    =>  $id
            ]);
         }
          return view('admin.admins.profile' , compact('user'));          //  if have profile
    }

    public function update(Request $request)
    {
        $this->validate($request,[

                'name'       =>  'required' ,
                'email'      =>  'required' ,
                'adress'     =>  'required' ,
                'phone'      =>  'required' ,
                'gender'     =>  'required' ,
                'city'       =>  'required' ,
        ]);

        $user = Auth::user();
        $user->name                 = $request->name;
        $user->email                = $request->email;
        $user->profile->adress      = $request->adress;
        $user->profile->phone       = $request->phone;
        $user->profile->gender      = $request->gender;
        $user->profile->city        = $request->city;
      //  $user->update();   // why not work
        $user->save;
        $user->profile->save();

        return redirect()->back();
    }

}
