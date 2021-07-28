<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

use App\Http\Controllers\contactController;

use App\Http\Controllers\portfolioController;

use App\Http\Controllers\blogController;

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

Route::get('/',[homeController::class,'index'] );

Route::get('/blog',[blogController::class,'index'] );


Route::get('/portfolio',[portfolioController::class,'index'] );


Route::get('/contact',[contactController::class,'index'] )->name('contact');

Route::get('/backoffice/portfolio', [portfolioController::class, 'index'])->name('backPortfolio');

Route::get('/projets/create' , [portfolioController::class, 'create'])->name('create');

Route::post('/projets', [portfolioController::class, 'store'])->name('store');
