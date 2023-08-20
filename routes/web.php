<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KikoDataHandlerController;


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
    return view('clientela-home');
});

Route::get('/clientela-form', function () {
    return view('clientela-form');
});

Route::post('/kiko/data-handler', [KikoDataHandlerController::class,'run']);