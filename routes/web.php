<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'PostController@index');
Route::resource('/posts', 'PostController');
Route::resource('posts.comments', 'CommentController', ['only' => ['store']]);

// Route::get('/', 'PostsController@index')->name('index');
// Route::post('/posts/create', 'PostsController@create');
// Route::get('/posts/show/{id}', 'PostsController@show');
// Route::get('/posts/edit/{id}', 'PostsController@edit');
// Route::post('/posts/edit/{id}', 'PostsController@update');
