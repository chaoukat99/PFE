<?php

use App\Http\Controllers\ExpertAuth\LoginController;
use App\Http\Controllers\ExpertAuth\RegisterController;
use App\Http\Controllers\ExpertController;
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

Route::get('/expertLogin',[LoginController::class,'login'])->name('expert.login');

Route::post('/expertLogin',[LoginController::class,'save'])->name('expert.save');

Route::get('/expertRegister',[RegisterController::class,'register']);

Route::post('/expertRegister',[RegisterController::class,'save'])->name('expert.register');


Route::middleware(['auth:experts'])
     ->group(function()
     {
        Route::resource('expertSpace',ExpertController::class);

    });
