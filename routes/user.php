<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

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

Route::prefix('users')->middleware(['sentinel.auth', 'sentinel.admin'])->name('user.')->group(function () {
    Route::get('/add', [UserController::class, 'create'])->name('create');
    Route::post('/add', [UserController::class, 'postCreate'])->name('postCreate');
    Route::get('/update/{id}', [UserController::class, 'update'])->name('update');
    Route::post('/update', [UserController::class, 'postUpdate'])->name('postUpdate');
    Route::delete('/delete', [UserController::class, 'destroy'])->name('delete');
});
