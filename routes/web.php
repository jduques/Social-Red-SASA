<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'UsersController@index');
Route::get('posts/{id}/{name}', 'PostsController@index');
Route::get('posts/{id}/{title}/comments', 'CommentsController@index');