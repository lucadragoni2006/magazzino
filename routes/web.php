<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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


Route::get('/', function() {
    return view('home');
})->middleware('auth');

// Mostra la tabella Articoli
Route::get('/articoli', [ArticoloController::class, 'index'])->middleware('auth');

// Elimina l'articolo selezionato
Route::delete('/articoli/{articolo}/delete', [ArticoloController::class, 'delete'])->middleware('auth');

// Mostra il form articoli
Route::get('/articoli/create', [ArticoloController::class, 'create'])->middleware('auth');

// Crea un nuovo articolo
Route::post('/articoli/store', [ArticoloController::class, 'store'])->middleware('auth');

// Mostra il form per la modifica articolo
Route::get('/articoli/{articolo}/edit', [ArticoloController::class, 'edit'])->middleware('auth');

// Modifica l'articolo selezionato
Route::put('/articoli/{articolo}', [ArticoloController::class, 'update'])->middleware('auth');


// Mostra la tabella Movimenti
Route::get('/movimenti', [MovimentoController::class, 'index'])->middleware('auth');

// Elimina l'articolo selezionato
Route::delete('/movimenti/{movimento}/delete', [MovimentoController::class, 'delete'])->middleware('auth');

// Mostra il form Movimenti
Route::get('/movimenti/create', [MovimentoController::class, 'create'])->middleware('auth');

// Crea un nuovo movimento
Route::post('/movimenti/store', [MovimentoController::class, 'store'])->middleware('auth');

// Mostra il form per la modifica articolo
Route::get('/movimenti/{movimento}/edit', [MovimentoController::class, 'edit'])->middleware('auth');

// Modifica l'elemento selezionato con relative conseguenze sui campi dell'articolo
Route::put('/movimenti/{movimento}', [MovimentoController::class, 'update'])->middleware('auth');


// Mostra login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login 
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');