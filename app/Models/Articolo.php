<?php

namespace App\Models;

use App\Models\Movimento;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Articolo extends Model
{
    protected $table = 'articoli';

    protected $fillable = ['codice', 'descrizione', 'unitadimisura', 'qtainiziale', 'valiniziale', 'qtacarichi', 'valcarichi', 'qtascarichi', 'valscarichi', 'iva', 'przvendita'];

    use HasFactory;

    // Relationship with Movimenti
    public function movimenti() {
        return $this->hasMany(Movimento::class, 'codice');
    }

    // filtro di ricerca
    public function scopeFilter($query, array $filtri) {
        if($filtri['search'] ?? false) {
            $query->where('codice', 'like', request('search') .'%')
                ->orWhere('descrizione', 'like', '%' . request('search') . '%');
        }
    }
}
