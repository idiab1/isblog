<?php

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

Route::prefix("Dashboard")->middleware(['auth', 'is_admin'])->group(function () {

    // -->>> Admin Home Route
    Route::get('/', function () {
        return "Admin Home";
    })->name("admin.home");
});
