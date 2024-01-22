<?php

use App\Http\Controllers\templateController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [templateController::class,'index'] ); 
// Route::get('/about', [templateController::class,'about'] ); 
// Route::get('/', [templateController::class,'index'] ); 
// Route::get('/', [templateController::class,'index'] ); 
// Route::get('/', [templateController::class,'index'] ); 
// Route::get('/', [templateController::class,'index'] ); 