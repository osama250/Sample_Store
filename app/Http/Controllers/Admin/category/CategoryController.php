<?php

namespace App\Http\Controllers\Admin\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Traits\UploadImg;

class CategoryController extends Controller
{
    use UploadImg;
    public function create()
    {
        return  view('admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate(  [
            'name'               => 'required',
            'description'        => 'required',
            'photo'              => 'required|image' ,
        ]);

        $path        = "uploads/categories";
        $filename    = $this->upload_photo( $request->photo , $path );

        $category  = Category::create([
            'name'          => $request->name,
            'description'   => $request->description ,
            'photo'         => $filename
        ]);
        $category->save();

        //$cate  = Category::create ( $request->all() );
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
        $category  = Category::find($id);

        $request->validate(  [
            'name'               => 'required',
            'description'        => 'required',
            'photo'              => 'required|image' ,
        ]);

        if ( $request->has('photo') ) {
            $path               = "uploads/categories";
            $filename           = $this->upload_photo( $request->photo , $path );
            $category->photo    = $filename;
        }

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
         if ( $category->photo != null ) {
            unlink("uploads/categories/$category->photo");
      }
        return redirect()->route('Categories.index')->with('success',' Category Deleted successfully');
    }

    public function backFromSoftDelete($id)
    {
        $categoty = Category::onlyTrashed()->where('id' , $id)->first()->restore();
        return redirect()->route('Categories.index')->with('success',' Done Category back');
    }
}
