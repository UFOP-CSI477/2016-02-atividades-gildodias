<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 80);
            $table->string('rua', 80);
            $table->string('numero', 10);
            $table->string('bairro', 80);
            $table->string('cep', 8);
            $table->string('mail', 50);
            $table->integer('cidade_id')->unsigned();
            $table->timestamps();

            $table->foreign('cidade_id')->references('id')
            ->on('cidades')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
