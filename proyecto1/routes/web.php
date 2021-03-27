<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarouselController;
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

// Route::get('/', 'UserController@index');
// Route::post('users', 'UserController@store')->name('users.store');
// Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');

Route::get('/', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/showImages', [CarouselController::class, 'index']);


