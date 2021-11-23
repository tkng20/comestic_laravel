<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Frontend Section
Route::get('/', [\App\Http\Controllers\Frontend\IndexController::class, 'home'])->name('home');
//Product Category
Route::get('product-category/{slug}/', [\App\Http\Controllers\Frontend\IndexController::class, 'productCategory'])->name('product.category');

//End Frontend Section



Auth::routes(['register' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin DashBoard
Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');
    // Banner Section
    Route::resource('banner', 'App\Http\Controllers\BannerController');
    Route::post("banner_status", [App\Http\Controllers\BannerController::class, 'bannerStatus'])->name('banner.status');
    // Category Section
    Route::resource('category', 'App\Http\Controllers\CategoryController');
    Route::post("category_status", [App\Http\Controllers\CategoryController::class, 'categoryStatus'])->name('category.status');
    Route::post("category/{id}/child", [App\Http\Controllers\CategoryController::class, 'getChildByParentID']);
    // Brand Section
    Route::resource('brand', 'App\Http\Controllers\BrandController');
    Route::post("brand_status", [App\Http\Controllers\BrandController::class, 'brandStatus'])->name('brand.status');
    // Coupon Section
    Route::resource('coupon', 'App\Http\Controllers\CouponController');
    Route::post("coupon_status", [App\Http\Controllers\CouponController::class, 'couponStatus'])->name('coupon.status');
    // Product Section
    Route::resource('product', 'App\Http\Controllers\ProductController');
    Route::post("product_status", [App\Http\Controllers\ProductController::class, 'productStatus'])->name('product.status');
    // User Section
    Route::resource('user', 'App\Http\Controllers\UserController');
    // Route::post("user_status", [App\Http\Controllers\UserController::class, 'userStatus'])->name('user.status');
    // // Role User Section
    Route::resource('role_user', 'App\Http\Controllers\RoleUserController');
    Route::post("role_user_status", [App\Http\Controllers\RoleUserController::class, 'roleUserStatus'])->name('role_user.roleUserStatus');
    // // Role Admin Section
    Route::resource('role_admin', 'App\Http\Controllers\RoleAdminController');
    Route::post("role_admin_status", [App\Http\Controllers\RoleAdminController::class, 'roleAdminStatus'])->name('role_admin.roleAdminStatus');
    // Post Category Section
    Route::resource('post_category', 'App\Http\Controllers\PostCategoryController');
    Route::post("post_category_status", [App\Http\Controllers\PostCategoryController::class, 'postCategoryStatus'])->name('post_category.status');
    // Post Tag Section
    Route::resource('post_tag', 'App\Http\Controllers\PostTagController');
    Route::post("post_tag_status", [App\Http\Controllers\PostTagController::class, 'postTagStatus'])->name('post_tag.status');
    // Post Section
    Route::resource('post', 'App\Http\Controllers\PostController');
    Route::post("post_status", [App\Http\Controllers\PostController::class, 'postStatus'])->name('post.status');
});
// Route::get('filemanager', [FileManagerController::class, 'index']);
