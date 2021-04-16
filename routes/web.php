<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\VoitureController;
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

Route::get('/', [AllController::class, 'home'])->name('home');

//BACK
Route::get('/admin/voiture', [VoitureController::class, 'index'])->name('voitures.index');
Route::get('/admin/voiture/create', [VoitureController::class, 'create'])->name('voitures.create');
Route::post('/admin/voiture/store', [VoitureController::class, 'store'])->name('voitures.store');
Route::delete('/admin/voiture/{id}/store', [VoitureController::class, 'destroy'])->name('voitures.delete');
