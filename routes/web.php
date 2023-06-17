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

Route::get('/', function () {
    return view('welcome');
});
// user
Route::get("/login-user","LoginUser@index")->name("login");
Route::post("/login-user/post","LoginUser@save")->name("post-user");
Route::get("/register-user","LoginUser@showcreate");
Route::post("/login-user","LoginUser@create")->name("create.user");
// expert
Route::get("/login-expert","LoginExpert@index")->name("expert.login");
Route::post("/login-expert","LoginExpert@save")->name("post-expertlog");

Route::get("/register-expert","LoginExpert@showcreate");
Route::post("/register-expert/post","LoginExpert@create")->name("post-expert");

// views


Route::get("/dash-user","LoginUser@dash")->middleware("auth");
Route::get("/dash-expert","LoginExpert@dash")->middleware("auth.expert");







