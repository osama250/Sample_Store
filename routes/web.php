<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {

//     return view('index');
// });
Route::get('/', 'SiteController@index' )->name('index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//profile
Route::get('/profile', 'ProfileController@index' )->name('myprofile');
Route::put('/profile/update', 'ProfileController@update' )->name('profile.update');


// Admin Routes
Route::group( [ 'middleware'  =>  ['auth' , 'admin'] ] ,  function() {

    Route::get('/dash', function () {
        return view('admin.index'); })->name('dash');

     // CategoryController
    Route::resource('Categories', 'CategoryController');
    Route::get('category/softdelete/{id}', 'CategoryController@softDelete')->name('delete.category');
    Route::get('category/trash', 'CategoryController@trashedCategrires')->name('category.trash');
    Route::get('category/backfromtrash/{id}', 'CategoryController@backFromSoftDelete')
    ->name('category.back.fromtrash');

     // Prodcuts
    Route::resource('Prodcuts', 'ProdcutController');
    Route::get('prodcut/softdelete/{id}', 'ProdcutController@softDelete')->name('delete.prodcut');
    Route::get('prodcuts/trash', 'ProdcutController@trashedProducts')->name('prodcut.trash');
    Route::get('prodcut/backfromtrash/{id}', 'ProdcutController@backFromSoftDelete')
    ->name('prodcut.back.fromtrash');

     // Types
    Route::resource('Types', 'TypeController');
    Route::get('type/softdelete/{id}', 'TypeController@softDelete')->name('delete.type');
    Route::get('types/trash', 'TypeController@trashedTypes')->name('type.trash');
    Route::get('type/backfromtrash/{id}', 'TypeController@backFromSoftDelete')
    ->name('type.back.fromtrash');

     // Admins
    Route::resource('Admins', 'AdminController');

     // Users
    Route::resource('Users', 'UserController');
    Route::get('user/softdelete/{id}', 'UserController@softDelete')->name('delete.user');
    Route::get('user/trash', 'UserController@trashedUsers')->name('user.trash');
    Route::get('user/backfromtrash/{id}', 'UserController@backFromSoftDelete')
    ->name('user.back.fromtrash');


     // reviews
    Route::resource('Reviews', 'ReviewController');
    Route::get('review/softdelete/{id}', 'ReviewController@softDelete')->name('delete.review');
    Route::get('review/trash', 'ReviewController@trashedReviews')->name('review.trash');
    Route::get('review/backfromtrash/{id}', 'ReviewController@backFromSoftDelete')
    ->name('review.back.fromtrash');

    // orders
    Route::resource('Orders', 'OrderController');

});
