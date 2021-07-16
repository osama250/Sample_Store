<?php

namespace App\Http\Controllers\Admin\prodcut;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prodcut;
use App\Models\Category;
use App\Models\Type;

class ProdcutsController extends Controller
{

    public function create()
    {
        $categories  = Category::orderBy('created_at','desc')->get();
        $types       = Type::orderBy('created_at','desc')->get();
        return view('admin.prodcut.create' , compact('types' , 'categories' ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          =>  'required' ,
            'content'       =>  'required' ,
            'price'         =>  'required' ,
            'photo'         =>  'required|image' ,
            'category_id'   =>  'required',
            'colors'        =>  'required'
        ]);

        $photo = $request->photo;
        $newPhoto = time().$photo->getClientOriginalName();  // new name of img
        $photo->move('uploads',$newPhoto);

        $prodcut = prodcut::create([
            'name'          =>  $request->name,
            'content'       =>  $request->content,
            'price'         =>  $request->price,
            'photo'         =>  'uploads/' . $newPhoto,
            'category_id'   =>  $request->category_id
        ]);

        $prodcut->types()->attach($request->colors);

        return redirect()->route('Prodcuts.index')->with('success','Prodcut Added Successfully');
    }

    public function show($id)
    {
        $prodcut      = Prodcut::find($id);
        $types        = $prodcut->types;
        $reviews      = $prodcut->reviews;
        return view('admin.prodcut.show' , compact('prodcut' , 'types' , 'reviews'));
    }

    public function edit($id)
    {
        $categories   = Category::orderBy('created_at','desc')->get();
        $types        = Type::all();
        $prodcut      = Prodcut::find($id);
        return view('admin.prodcut.edit' , compact('types' , 'prodcut' , 'categories'));
    }

    public function update(Request $request, $id)
    {
        $prodcut  = prodcut::find($id);
        $request->validate(  [
            'name'          =>  'required' ,
            'content'       =>  'required' ,
            'price'         =>  'required' ,
            'category_id'   =>  'required' ,
            'colors'        =>  'required'
        ]);

        if ( $request->has('photo') ) {
            $photo = $request->photo;
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('uploads',$newPhoto);
            $prodcut->photo ='uploads/'.$newPhoto;
        }

        $prodcut->name          =   $request->name;
        $prodcut->content       =   $request->content;
        $prodcut->price         =   $request->price;
        $prodcut->category_id   =   $request->category_id;

        $prodcut->save();
        $prodcut->types()->sync($request->colors);

        return redirect()->route('Prodcuts.index')->with('success','Prodcut updated successfully');
        // return edit($prodcut);
    }

    public function softDelete($id)
    {
        $prodcut = prodcut::find($id);
        if ( $prodcut->reviews != null  ) {
            $prodcut->delete();
        //  unlink($prodcut->photo);
            $prodcut->reviews()->delete();
            return redirect()->route('Prodcuts.index')->with('success','Prodcut Deleted');
        }
    }

    public function backFromSoftDelete($id)
    {
        $prodcut = prodcut::onlyTrashed()->where('id' , $id)->first()->restore();
        return redirect()->route('Prodcuts.index')->with('success',' Done Prodcut back');
    }
}
