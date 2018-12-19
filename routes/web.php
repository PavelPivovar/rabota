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



Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');

/*Route::get('/article','ArticlesController@index');
Route::get('/article/create','ArticlesController@create');
Route::get('/article/{id}','ArticlesController@show');
Route::post('/article','ArticlesController@store');*/

Route::resource('article', 'ArticlesController');

