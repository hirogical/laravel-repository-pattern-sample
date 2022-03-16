<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
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

Route::get('/', [ReservationController::class, 'index'])->name('reservation.index');
Route::get('/{reservationId}', [ReservationController::class, 'show'])->name('reservation.show');
Route::get('/{reservationId}/edit', [ReservationController::class, 'edit'])->name('reservation.edit');

Route::get('/', [UserController::class, 'index'])->name('user.index');
