<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class SiteController extends Controller
{
    public function index() {

        // $category  = Category::orderBy('created_at','desc')->where('name' , '' )->get();
        $category            = Category::find(2);
        $prodcuts            = $category->prodcuts;
        $category_phone      = Category::find(4);
        $phones              = $category_phone->prodcuts;
        //dd($category->name);
        return view('index' , compact('category' , 'prodcuts' , 'category_phone' ,'phones'));
    }
}
