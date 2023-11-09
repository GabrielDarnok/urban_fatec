<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\redirectController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarrinhoController;
use App\Models\Product;

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

Route::get('/',[redirectController::class, 'index']);

Route::get('/cart',[redirectController::class, 'cart'])->middleware('auth');

Route::get('/contato',[redirectController::class, 'contato']);

Route::get('/details',[redirectController::class, 'details']);

Route::get('/profile/{id}',[redirectController::class, 'profile'])->middleware('auth');

Route::get('/registro_end',[redirectController::class, 'registro'])->middleware('auth');

Route::get('/shop',[redirectController::class, 'shop']);

Route::get('/sobre',[redirectController::class, 'sobre']);

Route::get('/cadastroPage',[redirectController::class, 'cadastroPage']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('index');
    })->name('index');
});

Route::get('/admin', [redirectController::class, 'admin']);

Route::post('/products', [ProductController::class, 'store']);

Route::delete('/admin/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/admin/edit/{id}', [ProductController::class, 'edit']);

Route::post('admin/update/{id}', [ProductController::class, 'update']);

Route::post('/procura/product', [ProductController::class, 'busca_product'])->name('busca.busca_product');

Route::get('/shop/product/{id}', [ProductController::class, 'show_product']);

Route::post('/user/endereco', [UserController::class, 'cadastrar_endereco'])->middleware('auth');;

Route::get('/endereco/edit/{id}', [UserController::class, 'edit_endereco'])->middleware('auth');;

Route::post('/endereco/update/{id}', [UserController::class, 'update_endereco'])->middleware('auth');;

Route::delete('/endereco/{endereco}', [UserController::class, 'destroy_endereco'])->name('endereco.destroy');

Route::post('/car/add_car', [CarrinhoController::class, 'add_carrinho'])->middleware('auth');

Route::delete('/car/delete/{id}', [CarrinhoController::class, 'destroy_car'])->name('car.destroy')->middleware('auth');

Route::post('/edit/car', [CarrinhoController::class, 'edit_carrinho'])->middleware('auth');