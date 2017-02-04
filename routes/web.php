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

Route::get('/','MainController@main');
Route::post('/add','MainController@addcart');
Route::post('/search','MainController@search');

Auth::routes();

Route::get('/index', 'MainController@index');

Route::get('adminbar','HomeController@panel');


//Books
Route::get('book/create','BookController@create');
Route::post('book/update','BookController@update');
Route::post('book/create','BookController@insert');
Route::post('book/insert','BookController@edit');
