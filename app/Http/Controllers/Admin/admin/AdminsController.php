<?php

namespace App\Http\Controllers\Admin\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AdminsController extends Controller
{
    public function index()
    {
        $admins = User::orderBy('created_at','desc')->where('is_admin' , 1 )->get();
        return view('admin.admins.index' , compact('admins') );
    }

}
