<?php

use App\Http\Controllers\guest\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/serie-tv', [PageController::class, 'series'])->name('serie-tv');

Route::get('/login', [PageController::class, 'login'])->name('login');

Route::get('/dettagli-film/{id}', [PageController::class, 'details'])->name('movie-details');
