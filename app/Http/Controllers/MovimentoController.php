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
            'codice' => [''],
        ]);
    }
}
