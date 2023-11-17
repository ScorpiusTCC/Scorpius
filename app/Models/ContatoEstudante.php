<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContatoEstudante extends Model
{
    protected $table = 'contato_estudante';
    
    protected $fillable = [
        'celular', 
        'email'
    ];

    public function estudante()
    {
        return $this->hasOne(Estudante::class, 'id_contato');
    }
}
