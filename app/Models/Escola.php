<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    protected $table = 'escolas';

    protected $fillable = [
        'nome',
    ];

    public function escola_curso()
    {
        return $this->hasMany(EscolaCurso::class, 'id_escola');
    }
}
