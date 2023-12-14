<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
    protected $table = 'estudantes';

    protected $fillable = [
        'nome', 
        'data_nasc', 
        'idade', 
        'cpf', 
        'sobre', 
        'cep',
        'curriculo',
        'id_contato',
        'id_user',
        'id_sexo',
        'id_bairro',
        'created_at'
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    
    public function contato()
    {
        return $this->belongsTo(ContatoEstudante::class, 'id_contato');
    }

    public function candidatura()
    {
        return $this->hasMany(Candidatura::class, 'id_estudante');
    }

    public function estudante_curso()
    {
        return $this->hasMany(EstudanteCurso::class, 'id_estudante');
    }

    public function experiencia()
    {
        return $this->hasMany(Experiencia::class, 'id_estudante');
    }
    
    public function bairro()
    {
        return $this->belongsTo(Bairro::class, 'id_bairro');
    }

    public function sexo()
    {
        return $this->belongsTo(Sexo::class, 'id_sexo');
    }
}
