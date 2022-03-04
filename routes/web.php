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

Route::post('/seats/firstMovie',[App\Http\Controllers\SeatsFirstMovieController::class, 'store'])->name('store');
Route::delete('/seats/destroy/{id}',[App\Http\Controllers\SeatsFirstMovieController::class, 'destroy'])->name('seats.destroy');
Route::get('/seats/firstMovie',[App\Http\Controllers\SeatsFirstMovieController::class,'index'])->name('seats');

Route::post('/secondMovie/secondMovie',[App\Http\Controllers\SeatsSecondMovieController::class, 'store'])->name('store.secondMovie');
Route::delete('/secondMovie/destroy/{id}',[App\Http\Controllers\SeatsSecondMovieController::class, 'destroy'])->name('secondMovie.destroy');
Route::get('/secondMovie/secondMovie',[App\Http\Controllers\SeatsSecondMovieController::class,'index'])->name('secondMovie');

Route::post('/thirdMovie/thirdMovie',[App\Http\Controllers\SeatsThirdMovieController::class, 'store'])->name('store.thirdMovie');
Route::delete('/thirdMovie/destroy/{id}',[App\Http\Controllers\SeatsThirdMovieController::class, 'destroy'])->name('thirdMovie.destroy');
Route::get('/thirdMovie/thirdMovie',[App\Http\Controllers\SeatsThirdMovieController::class,'index'])->name('thirdMovie');

Route::post('/fourthMovie/fourthMovie',[App\Http\Controllers\SeatsFourthMovieController::class, 'store'])->name('store.fourthMovie');
Route::delete('/fourthMovie/destroy/{id}',[App\Http\Controllers\SeatsFourthMovieController::class, 'destroy'])->name('fourthMovie.destroy');
Route::get('/fourthMovie/fourthMovie',[App\Http\Controllers\SeatsFourthMovieController::class,'index'])->name('fourthMovie');

Route::post('/fifthMovie/fifthMovie',[App\Http\Controllers\SeatsFifthMovieController::class, 'store'])->name('store.fifthMovie');
Route::delete('/fifthMovie/destroy/{id}',[App\Http\Controllers\SeatsFifthMovieController::class, 'destroy'])->name('fifthMovie.destroy');
Route::get('/fifthMovie/fifthMovie',[App\Http\Controllers\SeatsFifthMovieController::class,'index'])->name('fifthMovie');

Route::post('/sixthMovie/sixthMovie',[App\Http\Controllers\SeatsSixthMovieController::class, 'store'])->name('store.sixthMovie');
Route::delete('/sixthMovie/destroy/{id}',[App\Http\Controllers\SeatsSixthMovieController::class, 'destroy'])->name('sixthMovie.destroy');
Route::get('/sixthMovie/sixthMovie',[App\Http\Controllers\SeatsSixthMovieController::class,'index'])->name('sixthMovie');

Route::post('/seventhMovie/seventhMovie',[App\Http\Controllers\SeatsSeventhMovieController::class, 'store'])->name('store.seventhMovie');
Route::delete('/seventhMovie/destroy/{id}',[App\Http\Controllers\SeatsSeventhMovieController::class, 'destroy'])->name('seventhMovie.destroy');
Route::get('/seventhMovie/seventhMovie',[App\Http\Controllers\SeatsSeventhMovieController::class,'index'])->name('seventhMovie');