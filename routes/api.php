<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\SlideController;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\Auth\AuthApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/v1', fn() => response()->json(['message' => 'ok']));

Route::group(['middleware' => 'auth:sanctum'], function () {

    Route::group(['middleware' => 'admin_user'], function () {

        // Routes categories
        Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
        Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update'); 
        Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    });

    //Routes slide
    Route::get('/slides', [SlideController::class, 'index'])->name('slides.index');

    Route::get('/slides/{id}', [SlideController::class, 'show'])->name('slides.show');


    //Routes article
    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');


    // Routes categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');

    //Routes user
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');


    Route::post('/me', [AuthApiController::class, 'me'])->name('auth.me');
    Route::post('/logout', [AuthApiController::class, 'logout'])->name('auth.logout');
});

//Routes user
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::post('/auth', [AuthApiController::class, 'auth'])->name('auth.login');
