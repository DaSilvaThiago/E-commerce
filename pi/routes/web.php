<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarrinhoItemController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsuarioController;


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


Route::get('/dashboard/{id}', [UsuarioController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/cart', [CarrinhoItemController::class, 'store'])->name('cart.store');
    Route::get('/profile/address/{id}', [AddressController::class, 'index'])->name('profile.address');
    Route::get('/profile/address/create/{id}', [AddressController::class, 'create'])->name('create.address');
    Route::post('/profile/address/store/{id}', [AddressController::class, 'store'])->name('store.address');
});

require __DIR__.'/auth.php';


Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/search', [ProductController::class, 'search'])->name('search');
Route::get('/products/FilledByCategory{id}', [ProductController::class, 'categoryFillproductsPage'])->name('categoryFillproductsPage');
Route::get('/productDetails/{id}', [ProductController::class, 'productDetails'])->name('productDetails');


