<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;

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

Route::controller(PostController::class)->group(function (){
    Route::get('/all', 'getAll')->name('allPost');
    Route::get('/post/{slug}', 'show')->name('showPost');
    Route::get('/category/{slug}', 'getByCategory')->name('getByCategory');
});
