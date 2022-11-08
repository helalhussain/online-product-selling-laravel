<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::get('/my-account/profile',[UserController::class,'profile']);
Route::post('/signin',[UserController::class,'login']);
Route::get('/logout',[UserController::class,'logout']);

// Route::get('/product',[UserController::class,'product'])->name('signUp');