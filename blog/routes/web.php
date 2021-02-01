<?php

use Illuminate\Support\Facades\Route;
use Illuminate\support\str;
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
//
Route::get('/', function () {
	
    return view('login');
	
});
// Route::viewl

//Route::get("path","controller file");

//
// Route::view("users",'users');
//
//);
//Route::get("user/{name}",[usersController::class,'loadview']);

//Route::view("about","about");
//Route::POST("users",[Userscontroller::class,'getData']);
//Route::view("login","users");

//Route::view("home","home");
//Route::view("noaccess","noaccess");
//Route::view("users","users")->middleware('protectedpage');

//
//Route::get('users',[userscontroller::class,'index']);
//
