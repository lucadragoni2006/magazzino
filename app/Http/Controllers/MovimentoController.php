<?php

namespace App\Http\Controllers;

use App\Models\Movimento;
use Illuminate\Http\Request;

class MovimentoController extends Controller
{
    public function index() {
        return view('movimenti.index');
    }
}
