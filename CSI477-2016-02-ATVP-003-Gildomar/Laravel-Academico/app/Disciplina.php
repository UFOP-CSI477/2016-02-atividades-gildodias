<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $fillable = ['nome','codigo','carga'];
    public function estado() {
   		return $this->belongsTo('App\Estado');
  	}
}
