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

/*CREATE*/
Route::get('/projets/create' , [backPortfolioController::class, 'create'])->name('createProjet');
Route::get('/articles/create',[backBlogController::class, 'create'])->name('createArticle');

/*READ*/
Route::get('/',[homeController::class,'index'] )->name('home');
Route::get('/blog',[blogController::class,'index'] );
Route::get('/portfolio',[portfolioController::class,'index'] );
Route::get('/contact',[contactController::class,'index'] )->name('contact');
Route::get('/backoffice',[backofficeController::class, 'index'])->name('backoffice');
Route::get('/backoffice/backPortfolio', [backPortfolioController::class, 'index'])->name('backPortfolio');
Route::get('/projets/{id}/show',[backPortfolioController::class, 'show'])->name('showProjet');
Route::get('/backoffice/blog',[backBlogController::class, 'index'])->name('backBlog');
Route::get('/articles/{id}/show',[backBlogController::class, 'show'])->name('showArticle');
/*UPDATE*/
Route::post('/articles',[backBlogController::class, 'store'])->name('storeArticle');
Route::get('/articles/{id}/edit',[backBlogController::class, 'edit'])->name('editArticle');
Route::put('/articles/{id}/update',[backBlogController::class, 'update'])->name('updateArticle');
Route::post('/projets' , [backPortfolioController::class, 'store'])->name('store');
Route::get('/projets/{id}/edit', [backPortfolioController::class, 'edit'])->name('editProjet');

/*DELETE*/
Route::post('projets/{id}/delete' ,[backPortfolioController::class, 'destroy'])->name('deleteProjet');
Route::delete('/articles/{id}/delete',[backBlogController::class, 'destroy'])->name('deleteArticle');















