<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //use HasFactory;   
    protected $table = "produto";
    protected  $fillable = [
		'nome' , 'marca' , 'setor', 'preco', 'descricao'
    ];
}
/*
* <nome da instituição> Unime
* <nome do curso> Sistemas de Informação
* <nome da disciplina> PpW2
* <nome do professor> Pablo Roxo
* <nome do(s) aluno(s)> Geraldo A. da Silva Júnior
*/