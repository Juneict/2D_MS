<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\reportController;

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

Auth::routes();
Route::group(['middleware'=>['auth']],function(){
    Route::resource('/products',App\Http\Controllers\ProductController::class);
    Route::resource('/customers',App\Http\Controllers\CustomerController::class);
    Route::resource('/orders',App\Http\Controllers\OrderController::class);
    Route::resource('/users',App\Http\Controllers\UserController::class);
    Route::get('/products/{product}/addPrice', [App\Http\Controllers\ProductController::class, 'addPrice'])->name('addPrice');
    Route::resource('/reports', App\Http\Controllers\reportController::class);
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/reverse_string', [App\Http\Controllers\OrderController::class, 'reverse_string'])->name('reverse_string');
});

