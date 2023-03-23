<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CreatCategory;
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

Route::get('/', [
    PagesController::class,
    'index'
]);

  
Route::get('/articles', [
    ArticlesController::class,
    'index'
]);
Route::get('/about', [
    PagesController::class,
    'about'
]);
Route::post('/articles',[
ArticlesController::class,'store'
])->name('articles.store');

Route::get('/articles/create', [
    ArticlesController::class,'create'
])->name('articles.create');
 

Route::get('/articles/{id}/edit', [
    ArticlesController::class,'edit'
])->name('articles.edit');

Route::put('/articles/{id}/update', [
    ArticlesController::class,'update'
])->name('articles.update');

Route::delete('/articles/{id}', [
    ArticlesController::class,'destroy'
])->name('articles.destroy');

Route::get('/articles/{id}', [
    ArticlesController::class,'show'
])->name('articles.show');
 
Route::get('/creatCategory', [
    CreatCategory::class,'index'
])->name('category.show');

Route::get('/showCategory', [
    CreatCategory::class,'store'
])->name('category.store');