<?php

use Illuminate\Support\Facades\Route;

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
//Auth::routes();


Route::get('/', [\App\Http\Controllers\FrontController::class, 'landingPage'])->name('landing-page');
Route::get('/login', [\App\Http\Controllers\FrontController::class, 'loginPage'])->name('login');
Route::post('/login', [\App\Http\Controllers\FrontController::class, 'login'])->name('login');
Route::get('/logout', [\App\Http\Controllers\FrontController::class, 'logout'])->name('logout');
Route::get('/article/{slug}', [\App\Http\Controllers\FrontController::class, 'articleView'])->name('article-view');
Route::get('/category/{slug}', [\App\Http\Controllers\FrontController::class, 'categoryPage'])->name('category-view');

Route::group([
    'prefix' => '/dashboard'
], function() {
    Route::resource('/category', \App\Http\Controllers\CategoryController::class);
    Route::resource('/article', \App\Http\Controllers\ArticleController::class);
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
