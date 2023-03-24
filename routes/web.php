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
    'home'
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
 

// category
Route::get('/categories', [
    CreatCategory::class,'index'
])->name('category.index');

Route::post('/categories', [
    CreatCategory::class,'store'
])->name('category.store');

Route::get('/categories/create',[
    CreatCategory::class,'create'
    ])->name('category.create');

Route::get('/categories/{id}', [
    CreatCategory::class,'show'
    ])->name('category.show');
Route::get('/categories/{id}/edit', [
        CreatCategory::class,'edit'
        ])->name('category.edit');

Route::put('/categories/{id}/update', [
            CreatCategory::class,'update'
        ])->name('category.update');
Route::delete('/categories/{id}', [
            CreatCategory::class,'destroy'
        ])->name('category.destroy');
// route show view of category
Route::get('/category/{id}',[
    ArticlesController::class,'showView'
])->name('cate_show');