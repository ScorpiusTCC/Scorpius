<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParticipanteConversa extends Model
{
    protected $table = 'participantes_conversa';
    protected $fillable = [
        'id_conversa', 
        'id_user'
    ];

    public function conversa()
    {
        return $this->belongsTo(Conversa::class, 'id_conversa');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
