<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cars', CarController::class);
Route::resource('reservations', ReservationController::class);
Route::resource('search', SearchController::class);
Route::get('/cars/search', [CarController::class, 'search'])->name('cars.search');
Route::get('/cars/rent', [CarController::class, 'rent'])->name('cars.rent');
