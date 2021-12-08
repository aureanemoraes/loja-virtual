<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    // Precisamos dizer para o Model com quais atributos da tabela ele irá trabalhar
    // Os atributos ID, CREATED_AT e UPDATED_AT não precisam ser declarados
    protected $fillable = [
        'nome',
        'descricao'
    ];

    // Relacionamentos
    // Relacionamento One to Many
    // -> 1 produto pertence a 1 categoria  
    // -> 1 categoria PODE TER VÁRIOS produtos
    public function produtos() {
        return $this->hasMany(Produto::class);
    }
}
