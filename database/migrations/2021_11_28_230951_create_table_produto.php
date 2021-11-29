<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('marca');
            $table->string('setor');
            $table->float('preco');
            $table->integer('descricao');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto');
    }
}
/*
* <nome da instituição> Unime
* <nome do curso> Sistemas de Informação
* <nome da disciplina> POW2
* <nome do professor> Pablo Roxo
* <nome do(s) aluno(s)> Geraldo A. da Silva Júnior
*/