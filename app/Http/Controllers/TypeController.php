<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;

class TypeController extends Controller
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

    public function create()
    {
        return view('admin.type.create');
    }

    public function store(Request $request)
    {
        $request->validate(  [
            'size'         => 'required' ,
            'color'        => 'required'
        ]);

        $cate  = Type::create( $request->all() );
        return redirect()->route('Types.index')->with('success','Type Added Successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $type = Type::find($id);
        return view('admin.type.edit' , compact('type'));
    }

    public function update(Request $request, $id)
    {
        $type           = Type::find($id);
        $type->size     = $request->size;
        $type->color    = $request->color;
        $type->save();
        return redirect()->route('Types.index')->with('success','Type updated successfully');
    }

    public function softDelete($id)
    {
        $type = Type::find($id);
        $type->delete();
        return redirect()->route('Types.index')->with('success','Type Deleted');
    }

    public function backFromSoftDelete($id)
    {
        $type = Type::onlyTrashed()->where('id' , $id)->first()->restore();
        return redirect()->route('Types.index')->with('success',' Done Type back');
    }
}
