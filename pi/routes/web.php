<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarrinhoItemController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProdutoController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




Route::redirect('/', '/produtos');
Route::resource('produtos', ProdutoController::class)->only([
    'index', 'show'
]);

Route::resource('usuarios', UsuarioController::class)->only([
    'show', 'create', 'update', 'store'
]);
Route::resource('enderecos', EnderecoController::class)->only([
    'index', 'show', 'create', 'update'
]);
Route::resource('carrinhos', CarrinhoItemController::class)->only([
    'show', 'create', 'update'
]);
Route::resource('pedidos', PedidoController::class)->only([
    'index', 'show', 'create', 'update'
]);
