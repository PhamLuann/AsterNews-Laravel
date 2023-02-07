<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\User\RegisterController;
use \App\Http\Controllers\User\ResetPasswordController;

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
    Route::prefix('auth')->name('auth.')->group(function (){
       Route::get('/facebook/redirect', 'redirectFacebook')->name('facebook');
       Route::get('/facebook/callback', 'handleAuthFacebook');
       Route::get('/google/redirect', 'redirectGoogle')->name('google');
       Route::get('/google/callback', 'handleAuthGoogle');
    });
});
Route::controller(RegisterController::class)->name('register.')->group(function (){
    Route::get('/register', 'register')->name('form');
    Route::post('/register', 'processRegister')->name('process');
    Route::get('/active/{userId}/{code}', 'activeAccount')->name('active');
});

Route::prefix('password')->middleware('guest')->controller(ResetPasswordController::class)->name('password.')->group(function (){
   Route::get('/forgot', 'forgotPassword')->name('forgot');
   Route::post('/code', 'sendCode')->name('email');
   Route::get('/reset/{token}', 'resetPassword')->name('reset');
   Route::post('/reset', 'processReset')->name('update');
});
