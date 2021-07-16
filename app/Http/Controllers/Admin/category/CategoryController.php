<?php

namespace App\Http\Controllers\Admin\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
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
