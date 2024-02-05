<?php

namespace App\Http\Controllers;

use App\Models\Articolo;
use App\Models\Movimento;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Validation\Rule as ValidationRule;

class MovimentoController extends Controller
{
    // Funzione variazione Articolo in base a causale
    public static function variaCausale(Articolo $articolo, $form) {
        switch ($form['causale']) {
            case '0':
                $articolo['qtainiziale'] += $form['qtamovimentata'];
                $articolo['valiniziale'] += $form['qtamovimentata'] * $form['valunitario'] - $form['sconto'];
                break;
            
            case '1':
                $articolo['qtacarichi'] += $form['qtamovimentata'];
                $articolo['valcarichi'] += $form['qtamovimentata'] * $form['valunitario'] - $form['sconto'];
                break;

            case '2':
                $articolo['qtascarichi'] += $form['qtamovimentata'];
                $articolo['valscarichi'] += $form['qtamovimentata'] * $form['valunitario'] - $form['sconto'];
                break;
            
            case '3':
                $articolo['qtascarichi'] -= $form['qtamovimentata'];
                $articolo['valscarichi'] -= $form['qtamovimentata'] * $form['valunitario'] - $form['sconto'];
                break;
            
            case '4':
                $articolo['qtacarichi'] -= $form['qtamovimentata'];
                $articolo['valcarichi'] -= $form['qtamovimentata'] * $form['valunitario'] - $form['sconto'];
                break;
            
            default:
                break;
        }
    }

    // mostra tabella dei movimenti
    public function index() {
        return view('movimenti.index', [
            'movimenti' => Movimento::latest()->filter(request(['search']))->paginate(10)->withQueryString()
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
            'datadocumento' => ['required', 'date'],
            'numdocumento' => ['required', 'max:9999999999'],
            'valunitario' => ['required', 'decimal:0,4', 'between:0,99999.99'],
            'sconto' => ['decimal:0,2', 'between:0,99.99'],
        ]);

        $articolo = Articolo::all()->where('codice', 'like', $form['codice'])->first();
        MovimentoController::variaCausale($articolo, $form);
        $articolo->update($articolo->getAttributes());
        Movimento::create($form);
        return redirect('/movimenti');
    }

    // Elimina il movimento selezionato
    public function delete(Movimento $movimento) {
        $movimento->delete();
        return redirect('/movimenti');
    }
}
