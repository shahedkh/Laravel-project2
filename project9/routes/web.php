<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', [DashboardController::class, 'index']);

//users

Route::get('users', [UserController::class, 'index']);
Route::get('add-user', [UserController::class, 'add']);
Route::get('edit-user/{id}', [UserController::class, 'edit']);
Route::put('update-user/{id}', [UserController::class, 'update']);
Route::post('insert-user', [UserController::class, 'insert']);
Route::get('delete-user/{id}', [UserController::class, 'destroy']);


//categories

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('add-category', [CategoryController::class, 'add']);
Route::get('edit-category/{id}', [CategoryController::class, 'edit']);
Route::post('insert-category', [CategoryController::class, 'insert']);
Route::put('update-category/{id}', [CategoryController::class, 'update']);
Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);


///products

Route::get('products', [ProductController::class, 'index']);
Route::get('add-product', [ProductController::class, 'add']);
Route::get('edit-product/{id}', [ProductController::class, 'edit']);
Route::put('update-product/{id}', [ProductController::class, 'update']);
Route::post('insert-product', [ProductController::class, 'insert']);
Route::get('delete-product/{id}', [ProductController::class, 'destroy']);



