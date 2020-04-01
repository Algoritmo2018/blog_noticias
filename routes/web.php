<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/navbaradm', [AdminController::class, 'Navbaradm']);

Route::get('/navbar', [HomeController::class, 'Navbar']);

Route::get('/index', [HomeController::class, 'index'])->name('home');

Route::get('/artigo_completo', [HomeController::class, 'artigo_completo'])->name('artigo_completo');

Route::get('/homeadm', [AdminController::class, 'HomeAdm'])->name('homeadm');

Route::get('/cadastrar_artigo', [AdminController::class, 'CadastrarArtigo'])->name('cadastrar_artigo');
Route::post('/create_article', [ArticleController::class, 'create'])->name('create.article');


Route::get('/cadastrar_categoria', [AdminController::class, 'CadastrarCategoria'])->name('cadastrar_categoria');

Route::post('/cadastrar_categoria', [AdminController::class, 'ArmazenarCategoria'])->name('armazenar_categoria');

Route::get('/{id}/editar_categoria', [AdminController::class, 'EditarCategoria'])->name('editar_categoria');

Route::put('/{id}/update_categoria', [AdminController::class, 'UpdateCategoria'])->name('update_categoria');

Route::delete('/{id}/delete_categoria', [AdminController::class, 'DestroyCategoria'])->name('destroy_categoria');

Route::get('/cadastrar_slide', [AdminController::class, 'CadastrarSlide'])->name('cadastrar_slide');

Route::get('/editar_artigo', [AdminController::class, 'EditarArtigo'])->name('editar_artigo');



Route::get('/editar_slide', [AdminController::class, 'EditarSlide'])->name('editar_slide');
Route::post('', [SlideController::class, 'store'])->name('create.slide');

Route::get('/slides', [SlideController::class, 'SlidesCadastrados'])->name('slides');

Route::delete('/{id}/slide', [SlideController::class, 'Destroy'])->name('destroy.slide');


Route::get('/images', [ImageController::class, 'index'])->name('images.index');
Route::post('/images/upload', [ImageController::class, 'store'])->name('images.upload');

Route::delete('', [ImageController::class, 'Destroy'])->name('images.delete');


Route::get('/article/title', [HomeController::class, 'index'])->name('article.search1');

Route::get('/article/category', [HomeController::class, 'index'])->name('article.search.category');
