<?php

use App\Models\Category;


function get_categories()
{
    $categories =  Category::orderBy('created_at','desc')->get();
    return $categories;
}

// function WomensCategory() {
//     $womencategory = Category::where('name' , 'Women’s')->get();
//     return $womencategory;
// }

// function phonesCategory() {
//     $phonecategory = Category::where('name' , 'Women’s')->get();
//     return $phonecategory;
// }
