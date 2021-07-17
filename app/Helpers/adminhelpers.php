<?php

use App\Models\Category;
use App\Models\Prodcut;
use App\Models\Review;
use App\Models\Type;
use App\Models\Order;
use App\User;


function count_Admins()
{
    $count = User::where('is_admin' , 1 )->count();
    return $count;
}
function count_Users()
{
    $count = User::where('is_admin' , 0)->count();
    return $count;
}

function count_Categories()
{
    $count = Category::count();
    return $count;
}

function count_Prodcuts()
{
    $count  = Prodcut::count();
    return $count;
}

function count_Types()
{
    $count  = Type::count();
    return $count;
}

function count_Reviews()
{
    $count  = Review::count();
    return $count;
}

function count_Orders()
{
    $count  = Order::count();
    return $count;
}
