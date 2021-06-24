<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\loginController;

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

Route::get('/registration',[registrationController::class,'registration']);
Route::post('/registration',[registrationController::class,'save'])->name('registration.save');
Route::get('/login',[registrationController::class,'view']);
Route::post('/login',[registrationController::class,'login'])->name('userlogin');