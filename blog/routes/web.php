<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\redirectController;
use App\Http\Controllers\ProductController;
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

Route::get('/asa',[redirectController::class, 'asa']);

Route::get('/cart',[redirectController::class, 'cart']);

Route::get('/contato',[redirectController::class, 'contato']);

Route::get('/details',[redirectController::class, 'details']);

Route::get('/profile/{id}',[redirectController::class, 'profile']);

Route::get('/registro',[redirectController::class, 'registro']);

Route::get('/shop',[redirectController::class, 'shop']);

Route::get('/sobre',[redirectController::class, 'sobre']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('index');
    })->name('index');
});

Route::get('/welcome', [redirectController::class, 'welcome']);

Route::get('/admin', [redirectController::class, 'admin']);

Route::post('/products', [ProductController::class, 'store']);

Route::delete('/admin/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/admin/edit/{id}', [ProductController::class, 'edit']);

Route::post('admin/update/{id}', [ProductController::class, 'update']);

Route::get('/procura/product', [ProductController::class, 'busca_product'])->name('busca.busca_product');

Route::get('/shop/product/{id}', [ProductController::class, 'show_product']);