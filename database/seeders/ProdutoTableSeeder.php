<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Produto::factory()->count(20)->create();
    }
}
