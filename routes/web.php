<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoriesController;

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
Route::get('/articles/create', [ArticlesController::class, 'create'])->name('articles.create');
Route::post('/articles/store', [ArticlesController::class, 'store'])->name('articles.store');
Route::post('/categories/store', [CategoriesController::class, 'store'])->name('categories.store');
