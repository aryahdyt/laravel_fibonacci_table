<?php

use App\Http\Controllers\FibonacciController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Psr7\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/users', UserController::class);

Route::get('/login', [LoginController::class, 'view'])->name('login.view');
Route::post('/login', [LoginController::class, 'attempt'])->name('login.attempt');

Route::get('/fibonacci', function () {
    return view('fibonacci.form');
});

Route::post('/fibonacci/make', FibonacciController::class)->name('fibonacci.make');


