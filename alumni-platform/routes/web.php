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

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', 'PostController@index')->name('home');
Route::get('post/show/{id}', 'PostController@show')->name('show_post');
Route::get('/post/create','PostController@create')->name('create_post')->middleware('auth');
Route::get('/post/filter', 'PostController@filter')->name('filter_post')->middleware('auth');

Route::post('/post/store', 'PostController@store')->name('store_post')->middleware('auth');
