<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modalidade extends Model
{
    protected $table = 'modalidades';
    
    protected $fillable = [
        'nome'
    ];

    public function vaga()
    {
        return $this->hasMany(Vaga::class, 'id_modalidade');
    }

    public function experiencia()
    {
        return $this->hasMany(Experiencia::class, 'id_modalidade');
    }
}
