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

Route::get('/', 'bookController@home');;

Route::get('/detail/{id}', 'bookController@detail');

Route::get('/category/{categoryId}', 'bookController@category');

Route::get('/search', 'bookController@category');
