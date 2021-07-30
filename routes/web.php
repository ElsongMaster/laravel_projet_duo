<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

use App\Http\Controllers\contactController;

use App\Http\Controllers\portfolioController;

use App\Http\Controllers\blogController;
use App\Http\Controllers\backofficeController;
use App\Http\Controllers\backHomeController;
use App\Http\Controllers\backBlogController;
use App\Http\Controllers\backPortfolioController;

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

Route::get('/',[homeController::class,'index'] )->name('home');

Route::get('/blog',[blogController::class,'index'] );

Route::get('/portfolio',[portfolioController::class,'index'] );

Route::get('/backoffice',[backofficeController::class, 'index'])->name('backoffice');

Route::get('/contact',[contactController::class,'index'] )->name('contact');

Route::get('/backoffice/backPortfolio', [backPortfolioController::class, 'index'])->name('backPortfolio');

Route::get('/projets/create' , [backPortfolioController::class, 'create'])->name('createProjet');

Route::post('/projets' , [backPortfolioController::class, 'store'])->name('store');

Route::post('/projets/{id}/delete' ,[backPortfolioController::class, 'destroy'])->name('delete');

Route::get('/backoffice/home',[backHomeController::class, 'index'])->name('backHome');

Route::get('/backoffice/blog',[backBlogController::class, 'index'])->name('backBlog');

// show
Route::get('/projets/{id}/show', [backPortfolioController::class, 'show'])->name('show');




