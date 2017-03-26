<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
	protected $fillable = ['nome','rua', 'numero', 'bairro', 'cep', 'mail', 'cidade_id'];
    public function isMatriculado() {
    	return true;
    }
    public function cidade() {
		return $this->belongsTo('App\Cidade');
	}
}
