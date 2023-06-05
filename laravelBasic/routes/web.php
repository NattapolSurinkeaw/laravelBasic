<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {return view('layouts.main');});
Route::resource('products',ProductController::class);
Route::resource('/productlist', [ProductController::class, 'index'])-name('productlist');
Route::resource('/editproduct', [ProductController::class, 'edit'])-name('editproduct');
Route::get('create',[ ProductController::class,'create']);