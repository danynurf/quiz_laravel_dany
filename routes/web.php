<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'redirectToHome'])
    ->name('home');

Route::get('/login', [HomeController::class, 'redirectToLogin'])
    ->name('login');

Route::get('/register', [HomeController::class, 'redirectToRegister'])
    ->name('register');

Route::get('todo', [HomeController::class, 'redirectToTodo'])
    ->name('todo');
