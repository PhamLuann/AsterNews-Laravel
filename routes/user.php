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

Route::prefix('admin')->controller(UserController::class)->name('admin.')->group(function () {
    Route::get('/add', 'create')->name('create');
    Route::post('/add', 'postCreate')->name('postCreate');
    Route::get('/update/{id}', 'update')->name('update');
    Route::post('/update', 'postUpdate')->name('postUpdate');
    Route::middleware(['sentinel.auth', 'sentinel.admin'])->delete('/delete', 'destroy')->name('delete');
});

Route::prefix('user')->controller(Users::class)->name('user.')->group(function (){
    Route::get('update/{id}', 'update')->name('update');
    Route::post('/update', 'postUpdate')->name('postUpdate');
});
