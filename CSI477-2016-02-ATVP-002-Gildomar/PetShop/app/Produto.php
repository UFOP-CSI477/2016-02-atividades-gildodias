<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function compra(){
        return $this->belongsTo('App\Compra');
    }

    public static function passanome($produto){
        return $produto->nome;
    }
}
