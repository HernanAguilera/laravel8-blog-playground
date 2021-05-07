<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ArticlesController::class, 'index'])->name('articles.index');

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login/check', [AuthController::class, 'loginCheck'])->name('auth.login.check');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register/store', [AuthController::class, 'store'])->name('auth.register.store');

Route::get('/articles/create', [ArticlesController::class, 'create'])->name('articles.create');
Route::post('/articles/store', [ArticlesController::class, 'store'])->name('articles.store');
Route::get('/articles/{id}/show', [ArticlesController::class, 'show'])->name('articles.show');

Route::post('/comments/store', [CommentsController::class, 'store'])->name('comments.store');

Route::post('/categories/store', [CategoriesController::class, 'store'])->name('categories.store');
