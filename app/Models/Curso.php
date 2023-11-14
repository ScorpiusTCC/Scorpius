<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    protected $fillable = [
        'nome', 
        'periodo_curso'
    ];

    // Se não houver relacionamentos definidos para esta tabela, remova esta classe.
}
