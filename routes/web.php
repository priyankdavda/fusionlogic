<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/portfolio/{portfolio}', [HomeController::class, 'show'])
    ->name('portfolio.show');

Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/services', [HomeController::class,'service'])->name('services');
Route::get('/services/{slug}', [HomeController::class,'serviceDetail'])->name('services.detail');
Route::get('/portfolio', [HomeController::class,'portfolio'])->name('portfolio');

// Blog Routes
Route::get('/blog', [BlogController::class,'index'])->name('blog');
Route::get('/blog/category/{slug}', [BlogController::class,'category'])->name('blog.category');
Route::get('/blog/{slug}', [BlogController::class,'show'])->name('blog.show');

