<?php

namespace App\Http\Controllers\Admin\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at','desc')->get();
        return view('admin.category.index' , compact('categories'));
    }

    public function trashedCategrires()
    {
        $categories = Category::onlyTrashed()->latest()->paginate(4);         // show only delete
        return view('admin.category.trash', compact('categories'));
    }

}
