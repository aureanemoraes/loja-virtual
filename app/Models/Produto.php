<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'valor',
        'qtd',
        'categoria_id'
    ];

    // Relacionamentos
    // Relacionamento One to Many
    // -> 1 produto pertence a 1 categoria  
    // -> 1 categoria PODE TER VÁRIOS produtos
    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
}
