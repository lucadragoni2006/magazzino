<?php

namespace App\Http\Controllers;

use App\Models\Articolo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ArticoloController extends Controller
{
    // Mostra la tabella articoli
    public function index(Request $request) {
        return view('articoli.index', [
            'articoli' => Articolo::latest()->filter(request(['search']))->paginate(10)
        ]);
    }

    // Mostra il form per creare articoli
    public function create() {
        return view('articoli.create');
    }

    // Crea e memorizza nel db un articolo
    public function store(Request $request) {
        $form = $request->validate([
            'codice' => ['required', 'max:13', Rule::unique('articoli', 'codice')],
            'descrizione' => ['required', 'max:30'],
            'unitadimisura' => ['required', 'max:2'],
            'qtainiziale' => ['required', 'numeric', 'max:9999999999'],
            'valiniziale' => ['required', 'decimal:0,2', 'between:0,9999999.99'],
            'qtacarichi' => ['required', 'numeric', 'max:9999999999'],
            'valcarichi' => ['required', 'decimal:0,2', 'between:0,9999999.99'],
            'qtascarichi' => ['required', 'numeric', 'max:9999999999'],
            'valscarichi' => ['required', 'decimal:0,2', 'between:0,9999999.99'],
            'iva' => ['required', 'decimal:0,2', 'between:0,99.99'],
            'przvendita' => ['required', 'decimal:0,2', 'between:0,999999.99'],
        ]);
        Articolo::create($form);
        return redirect('/articoli');
    }

    // Visualizza form per la modifica articolo
    public function edit(Articolo $articolo) {
        return view('articoli.edit', ['articolo' => $articolo]);
    }

    // Modifica l'articolo selezionato
    public function update(Request $request, Articolo $articolo) {
        $form = $request->validate([
            'codice' => ['required', 'max:13', Rule::unique('articoli', 'codice')->ignore($articolo->id)],
            'descrizione' => ['required', 'max:30'],
            'unitadimisura' => ['required', 'max:2'],
            'qtainiziale' => ['required', 'numeric', 'max:9999999999'],
            'valiniziale' => ['required', 'decimal:0,2', 'between:0,9999999.99'],
            'qtacarichi' => ['required', 'numeric', 'max:9999999999'],
            'valcarichi' => ['required', 'decimal:0,2', 'between:0,9999999.99'],
            'qtascarichi' => ['required', 'numeric', 'max:9999999999'],
            'valscarichi' => ['required', 'decimal:0,2', 'between:0,9999999.99'],
            'iva' => ['required', 'decimal:0,2', 'between:0,99.99'],
            'przvendita' => ['required', 'decimal:0,2', 'between:0,999999.99'],
        ]);
        $articolo->update($form);
        return redirect('/articoli');
    }

    // Elimina l'articolo selezionato
    public function delete(Articolo $articolo) {
        $articolo->delete();
        return redirect('/articoli');
    }
}
