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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/about', 'PagesController@about');

//Dynamic Routing

/*Route::get('/users/{id}', function ($id) {
    return 'This is User '.$id;
});*/

Route::get('/', 'PagesController@index');

Route::get('/services', 'PagesController@services');
Route::get('/contact', 'PagesController@contact');
Route::resource('posts', 'PostController');
Auth::routes();

Route::get('/home', 'HomeController@index');
