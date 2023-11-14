<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
    protected $table = 'estudantes';

    protected $fillable = ['nome', 
        'data_de_nascimento', 
        'cpf', 
        'ano_cursado', 
        'sobre', 
        'habilidades', 
        'experiencias', 
        'endereco',
        'id_contato'
    ];

    public function candidaturas()
    {
        return $this->hasMany(Candidatura::class, 'id_estudante');
    }

    public function usuarios()
    {
        return $this->hasMany(UsuarioEstudante::class, 'id_estudante');
    }

    public function contato()
    {
        return $this->belongsTo(ContatoEstudante::class, 'id_contato');
    }

}
