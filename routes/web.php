<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\CommentController;

Route::get('/', [ArticleController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/articles/details/{id}', [ArticleController::class, 'details']);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/articles/add', [ArticleController::class, 'add']);

Route::post('/articles/add', [ArticleController::class, 'create']);

Route::get('/articles/delete/{id}', [ArticleController::class, 'delete']);

Route::post('/comments/add', [CommentController::class, 'create']);

Route::get('/comments/delete/{id}', [CommentController::class, 'delete']);

Auth::routes();

Route::get('/', [App\Http\Controllers\ArticleController::class, 'index'])->name('home');


