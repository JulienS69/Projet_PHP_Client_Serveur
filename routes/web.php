<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\DonneesClientController;
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

/* Route N°2 */
Route::get('/accueil', [AccueilController::class, 'index'])->name('accueil.index');

/* Route N°3 */
Route::get('/clients', [DonneesClientController::class, 'index'])->name('clients.index');
