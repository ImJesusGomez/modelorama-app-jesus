<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
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

Route::get('/product', [ProductController::class, 'index'])->name('producto.index');
Route::post('/product', [ProductController::class, 'store'])->name('producto.store');
Route::get('/product-edit/{product}', [ProductController::class, 'edit'])->name('producto.edit');
Route::patch('/product-show/{product}', [ProductController::class, 'update'])->name('producto.update');
Route::delete('/product-delete/{product}', [ProductController::class, 'destroy'])->name('producto.destroy');
Route::get('/product-create', [ProductController::class, 'create'])->name('producto.create');
Route::get('/product-show/{product}', [ProductController::class, 'show'])->name('producto.show');
Route::get('/products-report', [ProductController::class, 'getReport'])->name('producto.report');

