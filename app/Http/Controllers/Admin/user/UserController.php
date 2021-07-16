<?php

namespace App\Http\Controllers\Admin\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

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
}
