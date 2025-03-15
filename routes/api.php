<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {

    Route::post('categories', [CategoryController::class, 'store']);
    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('categories/{id}', [CategoryController::class, 'show']);
    Route::put('categories/{id}', [CategoryController::class, 'update']);
    Route::delete('categories/{id}', [CategoryController::class, 'destroy']);

    Route::post('user/register', [UserController::class, 'register']);
    Route::post('user/login', [UserController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {

        Route::get('user', [UserController::class, 'index']);
        Route::get('user/{id}', [UserController::class, 'show']);
        Route::put('user/{id}', [UserController::class, 'update']);
        Route::post('user/logout', [UserController::class, 'logout']);

        Route::post('books', [BookController::class, 'store']);
        Route::get('books', [BookController::class, 'index']);
        Route::get('books/{id}', [BookController::class, 'show']);
        Route::put('books/{id}', [BookController::class, 'update']);
        Route::delete('books/{id}', [BookController::class, 'destroy']);

        Route::post('loans', [LoanController::class, 'store']);
        Route::get('loans', [LoanController::class, 'index']);
        Route::get('loans/{id}', [LoanController::class, 'show']);
        Route::put('loans/{id}', [LoanController::class, 'update']);
        Route::delete('loans/{id}', [LoanController::class, 'destroy']);

        Route::post('reviews', [ReviewsController::class, 'store']);
        Route::get('reviews/{id}', [ReviewsController::class, 'show']);
        Route::put('reviews/{id}', [ReviewsController::class, 'update']);
        Route::delete('reviews/{id}', [ReviewsController::class, 'destroy']);
    });
});
