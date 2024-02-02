<?php

namespace App\Models;

use App\Models\Articolo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movimento extends Model
{
    protected $table = 'movimenti';

    protected $fillable = ['codice', 'qtamovimentata', 'causale', 'datadocumento', 'numdocumento', 'valunitario', 'sconto'];

    use HasFactory;

    // Relationship to Articoli
    public function articoli() {
        return $this->belongsTo(Articolo::class, 'codice');
    }
}
