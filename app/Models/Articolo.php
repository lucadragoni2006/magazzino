<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articolo extends Model
{
    protected $table = 'articoli';

    protected $fillable = ['codice', 'descrizione', 'unitadimisura', 'qtainiziale', 'valiniziale', 'qtacarichi', 'valcarichi', 'qtascarichi', 'valscarichi', 'iva', 'przvendita'];

    use HasFactory;
}
