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

Route::get('/', [HomeController::class, 'index'])->name('index');;
Route::resource('coomic', CoomicController::class);
Route::get('/trash', [CoomicController::class, 'trash'])->name('trash');
Route::delete('/delete/{coomic}', [CoomicController::class, 'delete'])->name('coomic.delete');
Route::put('/coomic/{coomic}/restore', [CoomicController::class, 'restore'])->name('coomic.restore');
