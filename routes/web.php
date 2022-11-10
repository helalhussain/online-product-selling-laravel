<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/signin',[UserController::class,'signin_page'])->name('signin_page');
Route::get('/signup',[UserController::class,'signup_Page'])->name('signup_page');
Route::post('/signup',[UserController::class,'registration']);

Route::get('/my-account/profile',[UserController::class,'profile'])->middleware('isLoggedIn');
// Route::resource('/product',ProductController::class);
Route::resource('/my-account/product',ProductController::class)->middleware('isLoggedIn');
Route::post('/signin',[UserController::class,'login']);
Route::get('/logout',[UserController::class,'logout']);

Route::get('/product',[HomeController::class,'product']);

