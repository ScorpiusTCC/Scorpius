<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bairro extends Model
{
    use HasFactory;

    protected $table = 'bairros';
    
    protected $fillable = [ 
        'nome'
    ];

    public function estudante()
    {
        return $this->hasMany(Estudante::class, 'id_bairro');
    }

    public function vaga()
    {
        return $this->hasMany(Vaga::class, 'id_bairro');
    }
}
