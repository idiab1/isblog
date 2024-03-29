<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
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
Route::redirect('/', '/home');;
Route::get('/home', [HomeController::class, "index"])->name('home');

// // -->>> Categories route
// Route::get('/categories', [CategoryController::class, "index"])->name('categories');
// Route::get('/categories/{id}', [CategoryController::class, "show"])->name('front.categories.show');

// -->>> Tags route
Route::get('/tags', [TagController::class, "index"])->name('tags');
Route::get('/tags/{id}', [TagController::class, "show"])->name('front.tags.show');



// -->>> Articles Route
Route::resource('articles', ArticleController::class)->parameters([
    "articles" => "id"
])->names([
    "index" => "front.articles.index",
]);

// -->>> Profile Route
Route::resource('profile', ProfileController::class)->only([
    "update", "show"
])->parameters([
    "profile" => "id"
])->names([
    "update" => "front.profile.update",
    "show"   => "front.profile.show",
]);

