<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\PublicController;

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

/* Route per la pagina principale */
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

/* Route per visualizazzione pagina prodotti */
Route::get('shop', [ShoeController::class, 'index'])->name('shop');

/* Route per creazione prodotti */
Route::get('create', [ShoeController::class, 'create'])->name('create');

/* Route per visualizazzione dei prodotti */
Route::post('store', [ShoeController::class, 'store'])->name('store');

/* Route per visualizazzione dettagli prodotti */
Route::get('show/{shoe}', [ShoeController::class, 'show'])->name('show');

/* Route per edit prodotti */
Route::get('edit/{shoe}', [ShoeController::class, 'edit'])->name('edit');
Route::put('update/{shoe}', [ShoeController::class, 'update' ])->name('update');

/* Route per eliminare prodotti */
Route::delete('destroy/{shoe}', [ShoeController::class, 'destroy'])->name('destroy');

/* Route per visualizazzione pagina profilo */
Route::get('profile', [PublicController::class, 'profile'])->name('profile');