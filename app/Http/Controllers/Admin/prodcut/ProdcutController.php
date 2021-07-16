<?php

namespace App\Http\Controllers\Admin\prodcut;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prodcut;

class ProdcutController extends Controller
{

    public function index()
    {
        $prodcuts = prodcut::orderBy('created_at','desc')->get();
        return view('admin.prodcut.index' , compact('prodcuts'));
    }

    public function trashedProducts()
    {
        $prodcuts = prodcut::onlyTrashed()->latest()->paginate(4);         // show only delete
        return view('admin.prodcut.trash', compact('prodcuts'));
    }

}
