<?php

namespace App\Http\Controllers;

use App\Models\Articolo;
use App\Models\Movimento;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Validation\Rule as ValidationRule;

class MovimentoController extends Controller
{
    // Metodo variazione Articolo in base a causale
    public static function variaCausale(Articolo $articolo, $form, $flag) {
        switch ($form['causale']) {
            case 'Saldo Iniziale':
                if($flag) {
                    $articolo['qtainiziale'] += $form['qtamovimentata'];
                    $articolo['valiniziale'] += $form['qtamovimentata'] * $form['valunitario'] - $form['sconto'];
                } else {
                    $articolo['qtainiziale'] -= $form['qtamovimentata'];
                    $articolo['valiniziale'] -= $form['qtamovimentata'] * $form['valunitario'] - $form['sconto'];
                }
                break;
            
            case 'Acquisto':
                if($flag) {
                    $articolo['qtacarichi'] += $form['qtamovimentata'];
                    $articolo['valcarichi'] += $form['qtamovimentata'] * $form['valunitario'] - $form['sconto'];
                } else {
                    $articolo['qtacarichi'] -= $form['qtamovimentata'];
                    $articolo['valcarichi'] -= $form['qtamovimentata'] * $form['valunitario'] - $form['sconto'];
                }
                break;

            case 'Vendita':
                if($flag) {
                    $articolo['qtascarichi'] += $form['qtamovimentata'];
                    $articolo['valscarichi'] += $form['qtamovimentata'] * $form['valunitario'] - $form['sconto'];
                } else {
                    $articolo['qtascarichi'] -= $form['qtamovimentata'];
                    $articolo['valscarichi'] -= $form['qtamovimentata'] * $form['valunitario'] - $form['sconto'];
                }
                break;
            
            case 'Reso Cliente':
                if($flag) {
                    $articolo['qtascarichi'] -= $form['qtamovimentata'];
                    $articolo['valscarichi'] -= $form['qtamovimentata'] * $form['valunitario'] - $form['sconto'];
                } else {
                    $articolo['qtascarichi'] += $form['qtamovimentata'];
                    $articolo['valscarichi'] += $form['qtamovimentata'] * $form['valunitario'] - $form['sconto'];
                }
                break;
            
            case 'Reso da Fornitore':
                if($flag) {
                    $articolo['qtacarichi'] -= $form['qtamovimentata'];
                    $articolo['valcarichi'] -= $form['qtamovimentata'] * $form['valunitario'] - $form['sconto'];
                } else {
                    $articolo['qtacarichi'] += $form['qtamovimentata'];
                    $articolo['valcarichi'] += $form['qtamovimentata'] * $form['valunitario'] - $form['sconto'];
                }
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
            'causale' => ['required'],
            'datadocumento' => ['required', 'date'],
            'numdocumento' => ['required', 'max:9999999999'],
            'valunitario' => ['required', 'decimal:0,4', 'between:0,99999.99'],
            'sconto' => ['decimal:0,4', 'between:0,99.99'],
        ]);

        $articolo = Articolo::all()->where('codice', 'like', $form['codice'])->first();
        MovimentoController::variaCausale($articolo, $form, true);
        $articolo->update($articolo->getAttributes());
        Movimento::create($form);
        return redirect('/movimenti');
    }

    // Elimina il movimento selezionato
    public function delete(Movimento $movimento) {
        $movimento->delete();
        return redirect('/movimenti');
    }

    // Visualizza form per la modifica movimento
    public function edit(Movimento $movimento) {
        $articolo = Articolo::all()->where('codice', 'like', $movimento['codice'])->first()->getAttributes();
        $options = ['Saldo Iniziale', 'Acquisto', 'Vendita', 'Reso Cliente', 'Reso da Fornitore'];
        return view('movimenti.edit')
            ->with('movimento', $movimento)
            ->with('options', $options)
            ->with('descrizione', $articolo['descrizione']);
    }

    // Modifica il movimento selezionato con conseguenze sui campi dell'articolo
    public function update(Request $request, Movimento $movimento) {
        $form = $request->validate([
            'codice' => ['required', 'exists:articoli,codice'],
            'qtamovimentata' => ['required', 'max:9999999999'], 
            'causale' => ['required'],
            'datadocumento' => ['required', 'date'],
            'numdocumento' => ['required', 'max:9999999999'],
            'valunitario' => ['required', 'decimal:0,4', 'between:0,99999.99'],
            'sconto' => ['decimal:0,4', 'between:0,99.99'],
        ]);
        $articolo = Articolo::all()->where('codice', 'like', $movimento->codice)->first();
        MovimentoController::variaCausale($articolo, $movimento->getAttributes(), false);
        $articolo->update($articolo->getAttributes());
        MovimentoController::variaCausale($articolo, $form, true);
        $articolo->update($articolo->getAttributes());
        $movimento->update($form);
        return redirect('/movimenti');
    }
}
