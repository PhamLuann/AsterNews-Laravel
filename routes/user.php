<?php

use App\Http\Controllers\Admin\UserController;
use \App\Http\Controllers\User\UserController as Users;
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

Route::prefix('user')->controller(Users::class)->name('user.')->group(function (){
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/changeName', 'changeName')->name('changeName');
    Route::post('/changeName', 'doChangeName')->name('doChangeName');
    Route::get('/changePassword', 'changePassword')->name('changePassword');
    Route::post('/changePassword', 'doChangePassword')->name('doChangePassword');
});
