<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JansotorokuController; 
use App\Http\Controllers\EventController; 
use App\Http\Controllers\ReservationController; 
use App\Http\Controllers\MyPageController;

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




Route::post('jansotoroku',[JansotorokuController::class,'store']);
Route::get('osusume',[JansotorokuController::class,'index']);

Route::get('events/past',[EventController::class,'past'])->name('events.past');
Route::resource('events',EventController::class);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/calendar', function () {
        return view('calendar');
    })->name('calendar');
    Route::get('/jansoRegister', function () {
        return view('jansoRegister');
    })->name('jansoRegister');
});

Route::get('/mypage',[MyPageController::class,'index'])->name('mypage.index');

//dashboardより下にしないと４０４だった、、、
Route::get('/{id}',[ReservationController::class,'detail'])->name('events.detail');
Route::post('/{id}',[ReservationController::class,'reserve'])->name('events.reserve');


Route::get('/mypage',[MyPageController::class,'index'])->name('mypage.index');
