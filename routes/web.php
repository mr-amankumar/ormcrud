<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [ProductController::class, 'index'])->name('product.index');
Route::get('/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/show/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/products/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
