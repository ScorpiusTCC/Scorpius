<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Escolaridade extends Model
{
    protected $table = 'escolaridade';

    protected $fillable = [
        'instituicao',
        'curso',
        'id_periodo'
    ];

    public function periodoEstudo()
    {
        return $this->belongsTo(PeriodoEscolaridade::class, 'id_periodo');
    }
}
