<?php

use App\Http\Controllers\Dashboard\HomeController;
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
    Route::get('/home', [HomeController::class, "index"])->name("admin.home");

    // -->>> users Route
    Route::resource('users', UserController::class)->except([
        "show"
    ])->parameters([
        "users" => "id"
    ]);

    // -->>> Categories Route
    Route::resource('categories', CategoryController::class)->except([
        "show"
    ])->parameters([
        "categories" => "id"
    ]);

    // -->>> Tags Route
    Route::resource('tags', TagController::class)->except([
        "show"
    ])->parameters([
        "tags" => "id"
    ]);

    // -->>> Articles Route
    Route::resource('articles', ArticleController::class)->parameters([
        "articles" => "id"
    ]);

    // -->>> Setting Route
    Route::resource('settings', SettingController::class)->only([
        "edit", "update"
    ])->parameters([
        "settings" => "id"
    ]);


});
