<?php

namespace App\Http\Controllers\Admin\type;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;

class TypesController extends Controller
{

    public function index()
    {
        $types = Type::orderBy('created_at','desc')->get();
        return view('admin.type.index' , compact('types'));
    }

    public function trashedTypes()
    {
        $types = Type::onlyTrashed()->latest()->paginate(4);         // show only delete
        return view('admin.type.trash', compact('types'));
    }
}
