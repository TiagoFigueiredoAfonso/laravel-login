<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/login_action', [LoginController::class, 'login_action'])->name('login.action');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register_action', [LoginController::class, 'register_action'])->name('register.action');
Route::get('/home', [LoginController::class, 'home'])->name('home');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');