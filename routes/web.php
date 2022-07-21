<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
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
    return view('home');
});

Route::get('/animation', function () {
    return view('animation');
});

Route::get('/cinema', function () {
    return view('cinema');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('auth.index');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login',[LoginController::class,'index'])->middleware('guest'); 

Route::post('/login',[LoginController::class,'authenticate']); 

Route::get('/register',[RegisterController::class, 'index']); 

Route::post('/register',[RegisterController::class, 'store']); 

Route::get('/dashboard',[DashboardController::class, 'index']); 

Route::post('/logout',[loginController::class, 'logout']); 

