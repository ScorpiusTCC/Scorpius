<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    use HasFactory;

    protected $table = 'sexos'; // Nome da tabela

    protected $fillable = ['nome'];
    
    public function estudante()
    {
        return $this->hasMany(Estudante::class, 'id_sexo');
    }
}