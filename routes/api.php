<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

// Post API routes
Route::get('posts', [PostController::class, 'index']);
Route::get('posts/{id}', [PostController::class, 'show']);
Route::post('posts', [PostController::class, 'store']);
Route::delete('posts/{id}', [PostController::class, 'destroy']);

// User API routes
Route::get('users', [UserController::class, 'index']);
Route::get('users/{userId}', [UserController::class, 'show']);
Route::post('users', [UserController::class, 'store']);
Route::delete('users/{userId}', [UserController::class, 'destroy']);
