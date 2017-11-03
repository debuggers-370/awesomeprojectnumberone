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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('form', function(){
    return View::make('form');
});

Route::any('form-submit', function(){
    var_dump(Input::file('file'));
});

Auth::routes();

Route::get('/home{name?}', 'HomeController@index')->name('home');

Route::post('updatedinterests','UserController@updateInterests')->name('updateinterests');

Route::post('updatedcart', 'UserController@updateCart')->name('updateCart');


