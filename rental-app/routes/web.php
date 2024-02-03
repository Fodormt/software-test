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
})->name('/');

Route::get('/admin', function () {
    return view('admin');
})->name('/admin');

Route::resource('cars', CarController::class);
Route::resource('reservations', ReservationController::class);
Route::resource('search', SearchController::class);

Route::get('/reservations/rent/{carId}/{carPrice}/{start_date}/{end_date}', [ReservationController::class, 'rent'])
    ->name('reservations.rent');
