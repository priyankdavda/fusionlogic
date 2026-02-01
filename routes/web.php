<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\CaseStudyController;
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

Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/services', [HomeController::class,'service'])->name('services');
Route::get('/services/{slug}', [HomeController::class,'serviceDetail'])->name('services.detail');

// Portfolio Routes
Route::get('/portfolio', [PortfolioController::class,'index'])->name('portfolio');
Route::get('/portfolio/{slug}', [PortfolioController::class,'show'])->name('portfolio.show');

// Case Study Routes
Route::get('/case-studies', [CaseStudyController::class,'index'])->name('case-studies');
Route::get('/case-studies/{slug}', [CaseStudyController::class,'show'])->name('case-studies.show');

// Blog Routes
Route::get('/blog', [BlogController::class,'index'])->name('blog');
Route::get('/blog/category/{slug}', [BlogController::class,'category'])->name('blog.category');
Route::get('/blog/{slug}', [BlogController::class,'show'])->name('blog.show');

