<?php

namespace App\Http\Controllers;

use App\Models\Movimento;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Validation\Rule as ValidationRule;

class MovimentoController extends Controller
{
    // mostra tabella dei movimenti
    public function index() {
        return view('movimenti.index', [
            'movimenti' => Movimento::paginate(10)
        ]);
    }

    // Mostra form per creare movimenti
    public function create() {
        return view('movimenti.create');
    }

    // Crea e Memorizza nel db un movimento 
    public function store(Request $request) {
        $form = $request->validate([
            'codice' => ['required', 'exists:articoli,codice'],
            'qtamovimentata' => ['required', 'max:9999999999'], 
            'causale' => ['required', 'between:0,4'],
            'datadocumento' => ['required', 'date', 'before:date'],
            'numdocumento' => ['required', 'max:9999999999'],
            'valunitario' => ['required', 'decimal:0,2', 'between:0,99999.99'],
            'sconto' => ['decimal:0,2', 'between:0,99.99'],
        ]);
        Movimento::create($form);
        return redirect('/movimenti');
    }

    // Elimina l'articolo selezionato
    public function delete(Movimento $movimento) {
        $movimento->delete();
        return redirect('/movimenti');
    }
}
