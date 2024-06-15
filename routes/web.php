<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as HomeController;

use App\Http\Controllers\CoomicController as CoomicController;
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

Route::get('/', [HomeController::class, 'index']);
Route::resource('coomic', CoomicController::class);
