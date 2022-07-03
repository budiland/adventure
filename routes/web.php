<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'root']);

// Route::resource('customer', App\Http\Controllers\CustomerController::class);
Route::get('customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');
Route::get('customer/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('customer.create');
Route::post('customer', [App\Http\Controllers\CustomerController::class, 'store'])->name('customer.store');
Route::get('customer/{customer}', [App\Http\Controllers\CustomerController::class, 'show'])->name('customer.show');
Route::get('customer/{customer}/edit', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customer.edit');
Route::put('customer/{customer}', [App\Http\Controllers\CustomerController::class, 'update'])->name('customer.update');
Route::delete('customer/{customer}', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('customer.destroy');
Route::get('customer/dwafwaf', [App\Http\Controllers\CustomerController::class, 'dwafwaf'])->name('customer.dwafwaf');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index']);
//Language Translation

Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::post('/formsubmit', [App\Http\Controllers\HomeController::class, 'FormSubmit'])->name('FormSubmit');
