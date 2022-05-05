<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\reportController;
use App\Http\Controllers\weekreportController;

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
    Route::resource('/helps',App\Http\Controllers\ProductController::class);
    Route::resource('/customers',App\Http\Controllers\CustomerController::class);
    Route::resource('/orders',App\Http\Controllers\OrderController::class);
    Route::get('/deletetable',[App\Http\Controllers\OrderController::class, 'deletetable'])->name('deletetable');
    Route::resource('/users',App\Http\Controllers\UserController::class);
    Route::resource('/reports', App\Http\Controllers\reportController::class);
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/weekreports', [App\Http\Controllers\weekreportController::class, 'index'])->name('weekreport');
    Route::get('/limits', [App\Http\Controllers\limitController::class, 'index'])->name('limit');
    Route::get('/limits/addLimit', [App\Http\Controllers\limitController::class, 'index'])->name('addLimit');
    Route::get('/reverse_string', [App\Http\Controllers\OrderController::class, 'reverse_string'])->name('reverse_string');
});

