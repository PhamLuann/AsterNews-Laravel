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

Route::prefix('admin')->middleware(['sentinel.auth', 'sentinel.admin'])->controller(UserController::class)->name('admin.')->group(function () {
    Route::get('/add', 'create')->name('create');
    Route::post('/add', 'postCreate')->name('postCreate');
    Route::get('/update/{id}', 'update')->name('update');
    Route::post('/update', 'postUpdate')->name('postUpdate');
    Route::delete('/delete', 'destroy')->name('delete');
});

Route::prefix('user')->controller(Users::class)->name('user.')->group(function (){
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/changeName', 'changeName')->name('changeName');
    Route::post('/changeName', 'doChangeName')->name('doChangeName');
    Route::get('/changePassword', 'changePassword')->name('changePassword');
    Route::post('/changePassword', 'doChangePassword')->name('doChangePassword');
});
