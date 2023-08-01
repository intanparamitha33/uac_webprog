<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() {
    return view('home');
});

Route::get('/register', [JobController::class, 'choose'], [UserController::class, 'registrationPrice']);
Route::post('/register', [UserController::class, 'store']);

Route::get('/login', function() {
    return view('login');
});
Route::post('/login', [UserController::class, 'login']);

Route::get('/logout', [UserController::class, 'logout']);
