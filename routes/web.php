<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(["register"=> false]);

// -->>> Home route
Route::redirect('/', '/home', 301);;
Route::get('/home', [HomeController::class, "index"])->name('home');

// -->>> Tags route
Route::get('/tags', [TagController::class, "index"])->name('home');
