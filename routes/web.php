<?php

use App\Http\Controllers\Expert\Appointment;
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
Route::get("/admin",function(){
    return view("Admin.dashboard");
});
Route::get("/adminlogin",function(){
    return view("Admin.Auth.login");
});
Route::get("/expert",function(){
    return view("expert.Auth.login");
});
Route::get("/user_register",function(){
    return view("user.Auth.register");
});
Route::get("/user_login",function(){
    return view("user.Auth.login");
});
Route::get('/', function () {
    return view("Home");
});
// user
Route::get("/login-user","LoginUser@index")->name("login");
Route::post("/login-user/post","LoginUser@save")->name("post-user");
Route::get("/register-user","LoginUser@showcreate");
Route::post("/login-user","LoginUser@create")->name("create.user");
// expert
Route::get("/login-expert","LoginExpert@index")->name("expert.login");
Route::post("/login-expert","LoginExpert@save")->name("post-expertlog");
Route::post('/logout-expert', "LoginExpert@deconn")
    ->middleware('auth.expert')->name("expert.logout");

Route::get("/register-expert","LoginExpert@showcreate");
Route::post("/register-expert/post","LoginExpert@create")->name("post-expert");

// views


Route::get("/dash-user","LoginUser@dash")->middleware("auth");

Route::middleware('auth.expert')->group(function(){
    Route::prefix('/expertSpace')->group(function(){
        Route::get("/","LoginExpert@dash")->name('expert-dash');
        Route::resource('/Appointment',Appointment::class);

    });



});









