<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

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

Route::middleware('auth')
    ->group(function () {

        Route::get('/', [IndexController::class, 'index'])->name('home');
        Route::get('/about', [IndexController::class, 'about'])->name('about');

        Route::resource('users', UserController::class);
        Route::resource('books', BookCOntBooroller::class);
        Route::resource('authors', AuthorController::class);
});

Route::controller(AuthController::class)
    ->group(function () {
    Route::post('/login', 'login')->name('login')->middleware('guest');
    Route::delete('/logout', 'logout')->name('logout')->middleware('auth');
});


Route::inertia('/login', 'Login');
