<?php

use App\Http\Controllers\Shop\CartController;
use App\Http\Controllers\Shop\MainController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'index'])->name('accuiel');
Route::get('/produit/{id}', [MainController::class, 'produit'])->name('voir_produit');
Route::get('/smarthPhone/{id}', [MainController::class, 'smarthPhone'])->name('voir_un_smarthPhone');
Route::get('/smarthphone', [MainController::class, 'showSmarthPhone'])->name('showSmarthPhone');

//route pour les carts
Route::post('/panier/ajouter', [CartController::class, 'store'])->name('cart.store');

