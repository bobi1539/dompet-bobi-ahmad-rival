<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PocketController;
use App\Http\Controllers\PocketInController;
use App\Http\Controllers\PocketOutController;
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
    return redirect('/pockets');
});

Route::resource('/pockets', PocketController::class);
Route::resource('/categories', CategoryController::class);
Route::resource('/transactions-in', PocketInController::class);
Route::resource('/transactions-out', PocketOutController::class);
