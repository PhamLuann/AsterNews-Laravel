<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\User\RegisterController;

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

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'postLogin')->name('postLogin');
    Route::get('/logout', 'logout')->name('logout');
});
Route::controller(RegisterController::class)->name('register.')->group(function (){
    Route::get('/register', 'register')->name('form');
    Route::post('/register', 'processRegister')->name('')->name('process');
    Route::get('/active/{userId}/{code}', 'activeAccount')->name('active');
});
