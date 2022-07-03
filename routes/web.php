<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FactSaleController;
use App\Http\Controllers\FactProductionController;
use App\Http\Controllers\FactPurchasingController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'dashboard']);

// Route::resource('customer', App\Http\Controllers\CustomerController::class);
// Route::get('customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');
// Route::get('customer/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('customer.create');
// Route::post('customer', [App\Http\Controllers\CustomerController::class, 'store'])->name('customer.store');
// Route::get('customer/{customer}', [App\Http\Controllers\CustomerController::class, 'show'])->name('customer.show');
// Route::get('customer/{customer}/edit', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customer.edit');
// Route::put('customer/{customer}', [App\Http\Controllers\CustomerController::class, 'update'])->name('customer.update');
// Route::delete('customer/{customer}', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('customer.destroy');
// Route::get('customer/dwafwaf', [App\Http\Controllers\CustomerController::class, 'dwafwaf'])->name('customer.dwafwaf');

// Dashboard
Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

// FactSale
Route::get('sales/finance', [App\Http\Controllers\FactSaleController::class, 'finance'])->name('sales.finance');
Route::get('sales/order', [App\Http\Controllers\FactSaleController::class, 'order'])->name('sales.order');
Route::get('sales/shipment', [App\Http\Controllers\FactSaleController::class, 'shipment'])->name('sales.shipment');
Route::get('sales/store', [App\Http\Controllers\FactSaleController::class, 'store'])->name('sales.store');
Route::get('sales/region', [App\Http\Controllers\FactSaleController::class, 'region'])->name('sales.region');

// FactProduction
Route::get('production/inventory', [App\Http\Controllers\FactProductionController::class, 'inventory'])->name('production.inventory');
Route::get('production/product', [App\Http\Controllers\FactProductionController::class, 'product'])->name('production.product');

// FactPurchasing
Route::get('purchasing/product', [App\Http\Controllers\FactPurchasingController::class, 'product'])->name('purchasing.product');
Route::get('purchasing/vendor', [App\Http\Controllers\FactPurchasingController::class, 'vendor'])->name('purchasing.vendor');

// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index']);
//Language Translation

Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::post('/formsubmit', [App\Http\Controllers\HomeController::class, 'FormSubmit'])->name('FormSubmit');
