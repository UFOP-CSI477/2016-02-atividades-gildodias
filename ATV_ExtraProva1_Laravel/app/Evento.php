<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    public $table = 'eventos';

    public function registros(){
        return $this->hasMany('App\Registro');
    }

}
