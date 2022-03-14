<?php

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



Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/firstMovie',[App\Http\Controllers\ReserveSeats\SeatsFirstMovieController::class, 'store'])->name('store');
Route::delete('/firstMovie/destroy/{id}',[App\Http\Controllers\ReserveSeats\SeatsFirstMovieController::class, 'destroy'])->name('firstMovie.destroy');
Route::get('/firstMovie',[App\Http\Controllers\ReserveSeats\SeatsFirstMovieController::class,'index'])->name('firstMovie');

Route::post('/secondMovie',[App\Http\Controllers\ReserveSeats\SeatsSecondMovieController::class, 'store'])->name('store.secondMovie');
Route::delete('/secondMovie/destroy/{id}',[App\Http\Controllers\ReserveSeats\SeatsSecondMovieController::class, 'destroy'])->name('secondMovie.destroy');
Route::get('/secondMovie',[App\Http\Controllers\ReserveSeats\SeatsSecondMovieController::class,'index'])->name('secondMovie');

Route::post('/thirdMovie',[App\Http\Controllers\ReserveSeats\SeatsThirdMovieController::class, 'store'])->name('store.thirdMovie');
Route::delete('/thirdMovie/destroy/{id}',[App\Http\Controllers\ReserveSeats\SeatsThirdMovieController::class, 'destroy'])->name('thirdMovie.destroy');
Route::get('/thirdMovie',[App\Http\Controllers\ReserveSeats\SeatsThirdMovieController::class,'index'])->name('thirdMovie');

Route::post('/fourthMovie',[App\Http\Controllers\ReserveSeats\SeatsFourthMovieController::class, 'store'])->name('store.fourthMovie');
Route::delete('/fourthMovie/destroy/{id}',[App\Http\Controllers\ReserveSeats\SeatsFourthMovieController::class, 'destroy'])->name('fourthMovie.destroy');
Route::get('/fourthMovie',[App\Http\Controllers\ReserveSeats\SeatsFourthMovieController::class,'index'])->name('fourthMovie');

Route::post('/fifthMovie',[App\Http\Controllers\ReserveSeats\SeatsFifthMovieController::class, 'store'])->name('store.fifthMovie');
Route::delete('/fifthMovie/destroy/{id}',[App\Http\Controllers\ReserveSeats\SeatsFifthMovieController::class, 'destroy'])->name('fifthMovie.destroy');
Route::get('/fifthMovie',[App\Http\Controllers\ReserveSeats\SeatsFifthMovieController::class,'index'])->name('fifthMovie');

Route::post('/sixthMovie',[App\Http\Controllers\ReserveSeats\SeatsSixthMovieController::class, 'store'])->name('store.sixthMovie');
Route::delete('/sixthMovie/destroy/{id}',[App\Http\Controllers\ReserveSeats\SeatsSixthMovieController::class, 'destroy'])->name('sixthMovie.destroy');
Route::get('/sixthMovie',[App\Http\Controllers\ReserveSeats\SeatsSixthMovieController::class,'index'])->name('sixthMovie');

Route::post('/seventhMovie',[App\Http\Controllers\ReserveSeats\SeatsSeventhMovieController::class, 'store'])->name('store.seventhMovie');
Route::delete('/seventhMovie/destroy/{id}',[App\Http\Controllers\ReserveSeats\SeatsSeventhMovieController::class, 'destroy'])->name('seventhMovie.destroy');
Route::get('/seventhMovie',[App\Http\Controllers\ReserveSeats\SeatsSeventhMovieController::class,'index'])->name('seventhMovie');

Route::post('/eightMovie',[App\Http\Controllers\ReserveSeats\SeatsEightMovieController::class, 'store'])->name('store.eightMovie');
Route::delete('/eightMovie/destroy/{id}',[App\Http\Controllers\ReserveSeats\SeatsEightMovieController::class, 'destroy'])->name('eightMovie.destroy');
Route::get('/eightMovie',[App\Http\Controllers\ReserveSeats\SeatsEightMovieController::class,'index'])->name('eightMovie');

Route::get('/sellFirstMovie',[App\Http\Controllers\SellFirstMovieController::class,'index'])->name('sellFirstMovie');