<?php

use App\Http\Controllers\Api\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\SlideController;

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
//Routes slide
Route::apiResource('/slides', SlideController::class)->names('slides');
//Routes article
Route::apiResource('/articles', ArticleController::class)->names('articles');

 //Routes user
 Route::apiResource('/users', UserController::class)->names('users');

// Routes categories
Route::apiResource('/categories', CategoryController::class);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
