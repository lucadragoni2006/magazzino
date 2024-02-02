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


// Mostra la tabella Articoli
Route::get('/articoli', [ArticoloController::class, 'index']);

// Elimina l'articolo selezionato
Route::delete('/articoli/{articolo}/delete', [ArticoloController::class, 'delete']);

// Mostra il form articoli
Route::get('/articoli/create', [ArticoloController::class, 'create']);

// Crea un nuovo articolo
Route::post('/articoli/store', [ArticoloController::class, 'store']);

// Mostra il form per la modifica articolo
Route::get('/articoli/{articolo}/edit', [ArticoloController::class, 'edit']);

// Modifica l'articolo selezionato
Route::put('/articoli/{articolo}', [ArticoloController::class, 'update']);


// Mostra la tabella Movimenti
Route::get('/movimenti', [MovimentoController::class, 'index']);

// Elimina l'articolo selezionato
Route::delete('/movimenti/{movimento}/delete', [MovimentoController::class, 'delete']);

// Mostra il form Movimenti
Route::get('/movimenti/create', [MovimentoController::class, 'create']);

// Crea un nuovo movimento
Route::post('/movimenti/store', [MovimentoController::class, 'store']);