<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductdetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[HomeController::class,'index']);

Route::get('/category/{slug}',[CategoryController::class,'detail']);

Route::get('/category/electronics/{slug}',[SubcategoryController::class,'detail']);

Route::get('/category/electronics/tv/{slug}',[ProductdetailController::class,'detail']);

Route::get('/cart-list/{slug}',[CartController::class,'list']);

Route::get('/checkout/{slug}',[CheckoutController::class,'checkout']);

Route::get('register',[UserController::class,'register']);

Route::get('register1',[UserController::class,'register1']);

Route::get('login',[UserController::class,'login']);

Route::get('login1',[UserController::class,'login1']);

// User Dashboard Routes Start Here:
Route::get('user/',[UserController::class,'index']);

Route::get('user/order-history/',[UserController::class,'history']);

Route::get('user/detail/',[UserController::class,'detail']);

Route::get('user/settings/',[UserController::class,'settings']);


// Vendor Dashboard Route Srart Here:

Route::get('vendor/signup',[VendorController::class,'signup']);

Route::get('vendor/login',[VendorController::class,'login']);

Route::get('vendor/forget',[VendorController::class,'forget']);

Route::get('vendor/',[VendorController::class,'index']);

Route::get('vendor/add-product',[VendorController::class,'addproduct']);

Route::get('vendor/view-product',[VendorController::class,'viewproduct']);

Route::get('vendor/edit-product',[VendorController::class,'editproduct']);

Route::get('vendor/orders',[VendorController::class,'orders']);

Route::get('vendor/order-detail',[VendorController::class,'orderdetail']);

Route::get('vendor/users',[VendorController::class,'users']);

Route::get('vendor/profile',[VendorController::class,'profile']);

// Admin Dashboard Start Here

Route::get('admin/login',[AdminController::class,'login']);

Route::get('admin/',[AdminController::class,'index']);

Route::get('admin/order-detail',[AdminController::class,'orderdetail']);

Route::get('admin/add-category',[AdminController::class,'addcategory']);

Route::get('admin/view-category',[AdminController::class,'viewcategory']);

Route::get('admin/edit-category',[AdminController::class,'editcategory']);

Route::get('admin/users',[AdminController::class,'users']);

Route::get('admin/vendors',[AdminController::class,'vendors']);

Route::get('admin/orders',[AdminController::class,'orders']);

// Route::get('admin/products',[AdminController::class,'products']);
