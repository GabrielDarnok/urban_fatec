<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\redirectController;

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

Route::get('/procura',[redirectController::class, 'procura']);

Route::get('/profile',[redirectController::class, 'profile']);

Route::get('/registro',[redirectController::class, 'registro']);

Route::get('/shop',[redirectController::class, 'shop']);

Route::get('/sobre',[redirectController::class, 'sobre']);






