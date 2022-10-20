<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Product\ProductController;

Route::get('/', [ArticleController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/articles/detail', function() {
    return "Article Detail";
})->name('article.detail');

Route::get('/articles/more', function() {
    return redirect()->route('article.detail');
});

Route::get('/articles/detail/{id}', [ArticleController::class, 'detail']);

Route::get('/products', [ProductController::class, 'index']);
