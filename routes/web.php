<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JansotorokuController; 
use App\Http\Controllers\EventController; 

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

Route::prefix('admin')
->middleware('can:admin')
->group(function(){
    Route::get('index',function(){
        return view('jansoRegister');
    });
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
});
