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
    return view('pages.index');
});
Route::get('home','IndexController@welcome')->name('home');


Route::get('contact','ContactController@contact')->name('contact');
Route::get('about','AboutController@about')->name('about');
Route::get('blog','BlogController@blog')->name('blog');

