<?php

use App\Http\Controllers\passController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\pcrController;
use App\Http\Controllers\vaccineController;

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
    return view('card');
});

Route::get('/registration',[registrationController::class,'registration'])->name('registration');
Route::post('/registration',[registrationController::class,'save'])->name('registration.save');
Route::get('/login',[registrationController::class,'view'])->name('login');
Route::post('/login',[registrationController::class,'login'])->name('userlogin');
Route::get('/card',[registrationController::class,'card'])->name('card');
Route::get('/pcr',[pcrController::class,'pcr'])->name('pcr');
Route::post('/pcr',[pcrController::class,'pcrAction'])->name('pcrAction');
Route::get('/vaccine',[vaccineController::class,'vaccine'])->name('vaccine');;
Route::post('/vaccine',[vaccineController::class,'vaccineAction'])->name('vaccineAction');
Route::get('/pass',[passController::class,'pass'])->name('pass');
Route::post('/pass',[passController::class,'passAction'])->name('passAction');