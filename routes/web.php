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

Route::get('/person', 'PersonController@index');

Route::get('/person/find', 'PersonController@findGet');
Route::post('/person/find', 'PersonController@findPost');

Route::get('/person/add', 'PersonController@addGet');
Route::post('/person/add', 'PersonController@addPost');

Route::post('/person/delete', 'PersonController@deletePost');



Route::get('/board', 'BoardController@index');

Route::get('/board/add', 'BoardController@addGet');
Route::post('/board/add', 'BoardController@addPost');

Route::get('/board/show/{id?}', 'BoardController@show');
