<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    public $table = 'registros';
    
    public function atleta(){
        return $this->belongsTo('App\User', 'atleta_id');
    }

    public function evento(){
        return $this->belongsTo('App\Evento');
    }
}
