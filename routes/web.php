<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('home');
});

Route::get('home', 'HomeController@index');
Route::get('search', 'SearchController@index')->name('search');
Route::post('search', 'SearchController@search');
Route::get('product/{product_id}', 'ProductController@show');
Route::get('product', 'ProductController@index');
Route::get('block', 'BlockController@index');
Route::get('contact', 'ContactController@index');
Route::get('contact-list', 'ContactController@select');
Route::post('new-contact', 'ContactController@create');
