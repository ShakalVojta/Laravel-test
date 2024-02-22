<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AwardControllor;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
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

Route::get('/', function () {
    return view('welcome');
});

//"when the user comes to the path / awards with the GET request method
// handle the request with the index method of the AwardController class"
// Route::get('/awards', ['App\Http\Controllers\AwardControllor', 'index']);
// Route::get('/awards', [AwardControllor::class, 'index']);
// Route::get('/awards', [AwardControllor::class, 'index2']);
// Route::get('/movies', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('/movie', ['App\Http\Controllers\MovieController', 'index']);
Route::get('/game', ['App\Http\Controllers\MovieController', 'games']);
Route::get('/about-us', [AboutController::class, 'aboutUS']);