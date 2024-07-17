<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticlePostController;

Route::prefix('article-posts')->group(function () {
    Route::get('/', [ArticlePostController::class, 'index']);
    Route::post('/', [ArticlePostController::class, 'store']);
    Route::get('{id}', [ArticlePostController::class, 'show']);
    Route::put('{id}', [ArticlePostController::class, 'update']);
    Route::delete('{id}', [ArticlePostController::class, 'destroy']);
});
