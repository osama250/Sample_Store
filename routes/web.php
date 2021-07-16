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


Route::group(['prefix' => 'User' , 'namespace' => 'Admin' ] , function () {
        Route::get('/MyProfile', 'profile\ProfileController@index' )->name('myprofile');
        Route::put('/profile/update', 'profile\ProfileController@update' )->name('profile.update');
});
