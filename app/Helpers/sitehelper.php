<?php

use App\Models\Category;


function get_categories()
{
    $categories =  Category::orderBy('created_at','desc')->get();
    return $categories;
}
