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

Route::get('/', 'PageController@home')->name('home');

Route::post('/post', 'MessageController@store')->name('post');

Route::get('/post', 'MessageController@create')->name('post');

Route::get('/about', 'PageController@about')->name('about');

Route::get('/posts', 'MessageController@index')->name('posts');

Route::get('/message/{id}', 'MessageController@answer')->name('answer');

Route::post('/message/{id}','MessageController@postAnswer')->name('post.answer');