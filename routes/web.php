<?php

use App\Http\Controllers\dashboard\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\HomeController;
use App\Http\Controllers\dashboard\ProductController;

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
// products routes

Route::get('/dashboards' , [HomeController::class , 'index']);
Route::get('/dashboard/products' , [ProductController::class , 'index'])->name('products');
Route::get('/dashboard/product/create' , [ProductController::class , 'create'])->name('product.create');
Route::post('/dashboard/product/store' , [ProductController::class , 'store'])->name('product.store');

// categories routes
Route::get('/dashboard/categories' , [CategoryController::class , 'index'])->name('categories');
Route::get('/dashboard/categories/create' , [CategoryController::class , 'create'])->name('category.create');
Route::post('/dashboard/categories/store' , [CategoryController::class , 'store'])->name('category.store');
Route::post('/dashboard/categories/destroy/{id}' , [CategoryController::class , 'destroy'])->name('category.destroy');
Route::post('/dashboard/categories/edit/{id}' , [CategoryController::class , 'edit'])->name('category.edit');
Route::post('/dashboard/categories/update/{id}' , [CategoryController::class , 'update'])->name('category.update');



Route::get('/', function () {
    return view('welcome');
});
