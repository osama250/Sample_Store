<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
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

    public function create()
    {
        return  view('admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate(  [
            'name'               => 'required',
            'description'        => 'required'
        ]);

        $cate  = Category::create ( $request->all() );
        return redirect()->route('Categories.index')->with('success','Category Added Successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return  view('admin.category.edit' , compact('category') );
    }

    public function update(Request $request, $id)
    {
        $category               = Category::find($id);
        $category->name         = $request->name;
        $category->description  = $request->description;
        $category->save();
        return redirect()->route('Categories.index')->with('success',' Category updated successfully');
    }

    public function softDelete($id)
    {
        $category = Category::find($id);
        if ( $category->prodcuts != null ) {
            $category->delete();
            $category->prodcuts()->delete();
        }
        return redirect()->route('Categories.index')->with('success',' Category Deleted successfully');
    }

    public function backFromSoftDelete($id)
    {
        $categoty = Category::onlyTrashed()->where('id' , $id)->first()->restore();
        return redirect()->route('Categories.index')->with('success',' Done Category back');
    }
}
