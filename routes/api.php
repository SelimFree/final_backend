<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Post API routes
Route::get('posts', [PostController::class, 'index']);
Route::get('posts/{id}', [PostController::class, 'show']);
Route::post('posts', [PostController::class, 'store']);
Route::delete('posts/{id}', [PostController::class, 'destroy']);

// User API routes
Route::get('/users', 'UserController@index');
Route::get('/users/{userId}', 'UserController@show');
Route::post('/users', 'UserController@store');
Route::delete('/users/{userId}', 'UserController@destroy');
