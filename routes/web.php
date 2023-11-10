<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatosPersonalesController;
use App\Http\Controllers\tiposController;
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

Route::get('/datos',[DatosPersonalesController::class, 'index']);


Route::post('/datos',[DatosPersonalesController::class, 'store']);



Route::get('/tabla',[DatosPersonalesController::class, 'show']);

Route::get('/tipo',[tiposController::class, 'index']);

Route::post('/tipo',[tiposController::class, 'store']);


Route::get('/tipos/all',[tiposController::class, 'mostrar']);