<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticoloController;
use App\Http\Controllers\MovimentoController;

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

Route::get('/login', function () {
    return view('utenti.login');
});

Route::get('/movimenti/create', function () {
    return view('movimenti.create');
});

Route::get('/', function() {
    return view('home');
});

Route::get('/articoli/create', function() {
    return view('articoli.create');
});

Route::get('/movimenti', [MovimentoController::class, 'index']);

Route::get('/articoli', [ArticoloController::class, 'index']);