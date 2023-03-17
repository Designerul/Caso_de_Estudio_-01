<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

require_once __DIR__ . '/fortify.php';

/* Rutas publicas */
Route::resource('/', HomeController::class)->only(['index']);
Route::get('/filter', [HomeController::class, 'filter']);
Route::resource('book', BookController::class)->only(['show']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    
    /* Rutas de ventas */
    Route::resource('buy', BuyController::class);

    /* Rutas de administracion */
    Route::resource('dashboard', DashboardController::class);
    
});
