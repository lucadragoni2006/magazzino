<?php

namespace App\Http\Controllers;

use App\Models\Articolo;
use Illuminate\Http\Request;

class ArticoloController extends Controller
{
    public function index() {
        return view('articoli.index');
    }
}
