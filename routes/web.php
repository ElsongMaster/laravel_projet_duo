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


Route::get('/contact',[contactController::class,'index'] );



