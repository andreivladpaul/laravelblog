<?php

use Illuminate\Support\Facades\Route;

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
//User Routes
Route::namespace('User')->group(function(){

    Route::get('/','HomeController@index');
    Route::get('post','PostController@index');
});

 //Admin Routes
Route::namespace('Admin')->group(function(){
    Route::get('admin/home','HomeController@index')->name('admin.home');
    Route::resource('admin/post','PostController');
    Route::resource('admin/tag','TagController');
    Route::resource('admin/category','CategoryController');
    Route::resource('admin/user','UserController');
});


Auth::routes();

/* Route::get('/home', 'HomeController@index')->name('home'); */
