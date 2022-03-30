<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\homeController;
use App\Http\Controllers\race\raceController;
use App\Http\Controllers\pet\petController;

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

Route::get('/', homeController::class)->name('home');

Route::get('/race', [raceController::class, 'index'])->name('race');
Route::get('/race/create', [raceController::class, 'create'])->name('race.create');
Route::get('/race/{id}', [raceController::class, 'show'])->name('race.show');
Route::post('/race', [raceController::class, 'store'])->name('race.store');
Route::get('/race/{id}/edit', [raceController::class, 'edit'])->name('race.edit');
Route::put('/race/{id}', [raceController::class, 'update'])->name('race.update');
Route::delete('/race/{id}', [raceController::class, 'destroy'])->name('race.delete');

Route::get('/pet', [petController::class, 'index'])->name('pet');
Route::get('/pet/create', [petController::class, 'create'])->name('pet.create');
Route::get('/pet/{id}', [petController::class, 'show'])->name('pet.show');
Route::post('/pet', [petController::class, 'store'])->name('pet.store');
Route::get('/pet/{id}/edit', [petController::class, 'edit'])->name('pet.edit');
Route::put('/pet/{id}', [petController::class, 'update'])->name('pet.update');
Route::delete('/pet/{id}', [raceController::class, 'destroy'])->name('pet.delete');
