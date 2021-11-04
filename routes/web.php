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

Route::get('/', function () {
    return view('user/home');
});

Route::get('post', function () {
    return view('user/post');
})->name('post');

Route::get('admin/home', function () {
    return view('admin/home');
});
Route::get('admin-login', function () {
    return view('admin.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
