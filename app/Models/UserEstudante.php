<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserEstudante extends Model
{
    protected $table = 'user_estudante';
    
    protected $fillable = [
        'id_user', 
        'id_estudante'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function estudante()
    {
        return $this->belongsTo(Estudante::class, 'id_estudante');
    }
}
