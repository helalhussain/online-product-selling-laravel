<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminReportController;
use App\Models\Category;
use App\Models\Division;

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
    $all_category = DB::table('categories')->get();
    $all_division = DB::table('divisions')->get();
    return view('welcome',compact('all_category','all_division'));
})->name('home_page');
Route::get('/signin',[UserController::class,'signin_page'])->name('signin_page');
Route::get('/signup',[UserController::class,'signup_Page'])->name('signup_page');
Route::post('/signup',[UserController::class,'registration']);
Route::post('/signin',[UserController::class,'login']);
Route::get('/logout',[UserController::class,'logout']);

Route::get('/my-account/profile',[UserController::class,'profile'])->middleware('isLoggedIn');
Route::get('/my-account/edit-profile',[UserController::class,'edit_profile'])->middleware('isLoggedIn');
Route::post('/my-account/edit-profile',[UserController::class,'edit_profile_info']);
Route::get('/my-account/edit-profile-image',[UserController::class,'edit_profile_image']);
Route::post('/my-account/edit-profile-image',[UserController::class,'edited_profile_image']);
Route::get('/my-account/edit-password',[UserController::class,'edit_password_page']);
Route::post('/my-account/edit-password',[UserController::class,'edit_password']);
// Route::resource('/product',ProductController::class);
Route::resource('/my-account/product',ProductController::class)->middleware('isLoggedIn');
Route::get('/product-detail/{id}',[ProductController::class,'product_detail'])->name('product_detail_page');




Route::get('/product',[HomeController::class,'product'])->name('product_page');
Route::post('/product',[HomeController::class,'report']);
Route::get('/category/{id}',[HomeController::class,'view_category_product'])->name('category_page');
Route::get('/division/{id}',[HomeController::class,'view_division_product'])->name('division_page');

//Admin
Route::get('/admin/admin',[AdminAuthController::class,'admin'])->middleware('isAdmin');
Route::get('/admin/login',[AdminAuthController::class,'admin_login_page']);
Route::post('/admin/login',[AdminAuthController::class,'admin_login']);
Route::get('/admin/logout',[AdminAuthController::class,'admin_logout']);
//Admin user
Route::get('/admin/all-user',[AdminUserController::class,'admin_user_page'])->middleware('isAdmin');
Route::get('/admin/all-user-status/{id}',[AdminUserController::class,'user_status_change']);
Route::get('/admin/all-product',[AdminProductController::class,'admin_product_page'])->middleware('isAdmin');
Route::get('/admin/all-report',[AdminReportController::class,'admin_report_page'])->middleware('isAdmin');
Route::get('/admin/all-product-status/{id}',[AdminProductController::class,'product_block']);


