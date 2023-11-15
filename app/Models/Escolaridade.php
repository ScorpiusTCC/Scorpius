<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Escolaridade extends Model
{
    protected $table = 'escolaridade';

    protected $fillable = [
        'instituicao',
        'curso'
    ];

    // Se não houver relacionamentos definidos para esta tabela, remova esta classe.
}
