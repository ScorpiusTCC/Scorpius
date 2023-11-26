<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;

    protected $table = 'periodos';
    
    protected $fillable = [
        'nome'
    ];

    public function curso()
    {
        return $this->hasMany(estudanteCurso::class, 'id_periodo');
    }

    public function vaga()
    {
        return $this->hasMany(Vaga::class, 'id_periodo');
    }
}
