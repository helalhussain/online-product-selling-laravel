<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminUserController;
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
Route::get('/my-account/edit-profile',[UserController::class,'edit_profile'])->middleware('isLoggedIn');
Route::post('/my-account/edit-profile',[UserController::class,'edit_profile_info']);
Route::get('/my-account/edit-profile-image',[UserController::class,'edit_profile_image']);
Route::post('/my-account/edit-profile-image',[UserController::class,'edited_profile_image']);
// Route::resource('/product',ProductController::class);
Route::resource('/my-account/product',ProductController::class)->middleware('isLoggedIn');
Route::get('/product-detail/{id}',[ProductController::class,'product_detail'])->name('product_detail_page');


Route::post('/signin',[UserController::class,'login']);
Route::get('/logout',[UserController::class,'logout']);
Route::get('/product',[HomeController::class,'product']);

//Admin
Route::get('/admin/admin',[AdminAuthController::class,'admin']);
Route::get('/admin/login',[AdminAuthController::class,'admin_login_page']);

//Admin user
Route::get('/admin/all-user',[AdminUserController::class,'admin_user_page']);


