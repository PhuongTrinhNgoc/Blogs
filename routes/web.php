<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CreatCategory;
use App\Http\Controllers\HomeController;
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

  
Route::get('/admin', [
    ArticlesController::class,
    'index'
])->name('admin.index');
// Route::get('/{selectSort}', [
//     ArticlesController::class,
//     'index'
// ]);
Route::get('/about', [
    PagesController::class,
    'about'
]);
Route::post('/admin',[
ArticlesController::class,'store'
])->name('articles.store');

Route::get('/admin/create', [
    ArticlesController::class,'create'
])->name('articles.create');
 

Route::get('/admin/{id}/edit', [
    ArticlesController::class,'edit'
])->name('articles.edit');

Route::put('/admin/{id}/update', [
    ArticlesController::class,'update'
])->name('articles.update');

Route::delete('/admin/{id}', [
    ArticlesController::class,'destroy'
])->name('articles.destroy');

Route::get('/home/{id}', [
    ArticlesController::class,'show'
])->name('articles.show');
Route::get('/news/{id}', [
    ArticlesController::class,'showNews'
])->name('showNews.show');

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
  

//user

Route::get('/res',[
    HomeController::class,'res'
])->name('res-form');
Route::post('/res',[
    HomeController::class,'resPost'
])->name('res-main');
Route::get('/login',[
    HomeController::class,'login'
])->name('login.user');
Route::post('/login',[
    HomeController::class,'loginPost'
])->name('loginPost.user');
Route::get('/logout',[
    HomeController::class,'logout'
])->name('logout.user');


// create news
Route::get('/newsBlog',[
    ArticlesController::class,'indexNews'
])->name('news.index');

Route::get('/newsBlog/create',[
    ArticlesController::class,'createdNews'
])->name('created.news');
Route::post('/newsBlog/create',[
    ArticlesController::class,'storeNews'
])->name('storeNews.news');
Route::get('/newsBlog/{id}/edit',[
    ArticlesController::class,'editNews'
])->name('edit.news');
Route::put('/newsBlog/{id}/update',[
    ArticlesController::class,'updateNews'
])->name('updateNews.news');
Route::delete('/newsBlog/{id}/delete', [
    ArticlesController::class,'destroyNews'
])->name('destroyNews.destroy');