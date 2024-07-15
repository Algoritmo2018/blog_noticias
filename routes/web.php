<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CommentController;
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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/verify-email', function () {
    return view('auth/verify-email');
});

Route::get('/navbaradm', [AdminController::class, 'Navbaradm']);

Route::get('/navbar', [HomeController::class, 'Navbar']);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/{id}/artigo_completo', [HomeController::class, 'artigo_completo'])->middleware(['auth', 'verified'])->name('artigo_completo');

Route::get('/homeadm', [AdminController::class, 'HomeAdm'])->name('homeadm');

Route::get('/cadastrar_artigo', [AdminController::class, 'CadastrarArtigo'])->name('cadastrar_artigo');
Route::post('/create_article', [ArticleController::class, 'create'])->name('create.article');


Route::delete('/{id}/destroy_article', [ArticleController::class, 'Destroy'])->name('destroy_article');

Route::get('/cadastrar_categoria', [AdminController::class, 'CadastrarCategoria'])->name('cadastrar_categoria');

Route::post('/cadastrar_categoria', [AdminController::class, 'ArmazenarCategoria'])->name('armazenar_categoria');

Route::get('/{id}/editar_categoria', [AdminController::class, 'EditarCategoria'])->name('editar_categoria');

Route::put('/{id}/update_categoria', [AdminController::class, 'UpdateCategoria'])->name('update_categoria');

Route::delete('/{id}/delete_categoria', [AdminController::class, 'DestroyCategoria'])->name('destroy_categoria');

Route::get('/cadastrar_slide', [AdminController::class, 'CadastrarSlide'])->name('cadastrar_slide');

Route::get('/{id}/editar_artigo', [ArticleController::class, 'EditarArtigo'])->name('editar_artigo');



Route::get('/editar_slide', [AdminController::class, 'EditarSlide'])->name('editar_slide');
Route::post('', [SlideController::class, 'store'])->name('create.slide');

Route::get('/slides', [SlideController::class, 'SlidesCadastrados'])->name('slides');

Route::delete('/{id}/slide', [SlideController::class, 'Destroy'])->name('destroy.slide');


Route::get('/images', [ImageController::class, 'index'])->name('images.index');
Route::post('/images/upload', [ImageController::class, 'store'])->name('images.upload');

Route::delete('', [ImageController::class, 'Destroy'])->name('images.delete');


Route::get('/article/title', [HomeController::class, 'index'])->name('article.search1');

Route::get('/article/category', [HomeController::class, 'index'])->name('article.search.category');


Route::get('/homeadm/article/title', [AdminController::class, 'HomeAdm'])->name('article.search');

Route::put('/{id}/article/update', [ArticleController::class, 'UpdateArticle'])->name('update_article');



Route::post('/{id}/create/comment', [CommentController::class, 'create'])->name('create.comment');


Route::get('/{id}/editar/comment', [CommentController::class, 'editar'])->name('editar.comment');

Route::put('/{id}/update/comment', [CommentController::class, 'UpdateComment'])->name('update.comment');

Route::delete('/{id}/delete/comment', [CommentController::class, 'Destroy'])->name('delete.comment');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

