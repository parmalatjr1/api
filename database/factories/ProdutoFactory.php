<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ProdutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
     
        return [
            'nome'  => $this-> faker->name,
            'marca' => $this-> faker->realText(180),
            'setor' => $this-> faker->realText(180),
            'preco' => $this-> faker->numberBetween(50, 100),
       'descricao' => $this-> faker->realtext(20)
        ];
    }

}

/*
* <nome da instituição> Unime
* <nome do curso> Sistemas de Informação
* <nome da disciplina> POW2
* <nome do professor> Pablo Roxo
* <nome do(s) aluno(s)> Geraldo A. da Silva Júnior
*/