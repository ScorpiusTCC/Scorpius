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
        'id_contato',
        'id_user',
        'id_sexo'
    ];

    
    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    
    public function contato()
    {
        return $this->belongsTo(ContatoEstudante::class, 'id_contato');
    }

    public function candidaturas()
    {
        return $this->hasMany(Candidatura::class, 'id_estudante');
    }

    public function usuario_estudante()
    {
        return $this->hasMany(UsuarioEstudante::class, 'id_estudante');
    }

    public function sexo()
    {
        return $this->belongsTo(Sexo::class, 'id_sexo');
    }
}
