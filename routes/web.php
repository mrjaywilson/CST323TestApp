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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');

// Profile Routes
Route::post('/profile', 'ProfileController@save')->name('save-profile');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/edit', 'ProfileController@edit')->name('edit-profile');

// Product Routes
Route::post('/product/update', 'ProductController@update')->name('update-product');
Route::post('/product/create', 'ProductController@create')->name('create-product');
Route::get('/product/list', 'ProductController@list')->name('product-list');
Route::get('/product/new', 'ProductController@new')->name('new-product');
Route::get('/product/edit/{id}', 'ProductController@edit')->name('edit-product');
Route::get('/product/delete/{id}', 'ProductController@delete')->name('delete-product');
Route::get('/product/{id}', 'ProductController@read')->name('view-product');
