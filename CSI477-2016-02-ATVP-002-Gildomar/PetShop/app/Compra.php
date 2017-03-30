<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    public function produtos(){
        return $this->hasMany('App\Produto');
    }
}
