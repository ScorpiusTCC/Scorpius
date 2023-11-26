<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidatura extends Model
{
    protected $table = 'candidaturas';
    
    protected $fillable = [
        'id_estudante', 
        'id_vaga'
    ];

    public function estudante()
    {
        return $this->belongsTo(Estudante::class, 'id_estudante');
    }

    public function vaga()
    {
        return $this->belongsTo(Vaga::class, 'id_vaga');
    }
}
