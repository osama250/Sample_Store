<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();


Route::get('/dash', function () {
    return view('admin.index'); })->middleware(['auth' , 'admin'])->name('dash');

Route::group(['prefix' => 'admin' , 'namespace' => 'Admin' , 'middleware' =>  ['auth' , 'admin'] ] , function () {


    // aadmin
    Route::resource('Admins', 'admin\AdminsController');
    Route::resource('Admin', 'admin\AdminController');

    //users
    Route::resource('Users', 'user\UsersController');
    Route::resource('User', 'user\UserController');
    Route::get('users/trash', 'user\UsersController@trashedUsers')->name('users.trash');
    Route::get('user/softdelete/{id}', 'user\UserController@softDelete')->name('delete.user');
    Route::get('user/backfromtrash/{id}', 'user\UserController@backFromSoftDelete')
    ->name('user.back.fromtrash');

    // Categories
    Route::resource('Categories', 'category\CategoriesController');
    Route::resource('Category', 'category\CategoryController');
    Route::get('ctegories/trashed', 'category\CategoriesController@CategriresTrashed')->name('categories.trashed');
    Route::get('category/softdelete/{id}', 'category\CategoryController@softDelete')->name('delete.category');
    Route::get('category/backfromtrash/{id}', 'category\CategoryController@backFromSoftDelete')
    ->name('category.back.fromtrash');

    // Prodcuts
    Route::resource('Prodcuts', 'prodcut\ProdcutsController');
    Route::resource('Prodcut', 'prodcut\ProdcutController');
    Route::get('prodcuts/trash', 'prodcut\ProdcutsController@trashedProducts')->name('prodcuts.trash');
    Route::get('prodcut/softdelete/{id}', 'prodcut\ProdcutController@softDelete')->name('delete.prodcut');
    Route::get('prodcut/backfromtrash/{id}', 'prodcut\ProdcutController@backFromSoftDelete')
    ->name('prodcut.back.fromtrash');

    // Types
    Route::resource('Types', 'type\TypesController');
    Route::resource('Type', 'type\TypeController');
    Route::get('types/trash', 'type\TypesController@trashedTypes')->name('types.trash');
    Route::get('type/softdelete/{id}', 'type\TypeController@softDelete')->name('delete.type');
    Route::get('type/backfromtrash/{id}', 'type\TypeController@backFromSoftDelete')
    ->name('type.back.fromtrash');

     // reviews
    Route::resource('Reviews', 'review\ReviewsController');
    Route::get('reviews/trash', 'review\ReviewsController@trashedReviews')->name('reviews.trash');
    Route::get('review/softdelete/{id}', 'review\ReviewController@softDelete')->name('delete.review');
    Route::get('review/backfromtrash/{id}', 'review\ReviewController@backFromSoftDelete')
    ->name('review.back.fromtrash');

    // orders
    Route::resource('Orders', 'order\OrdersController');

});
