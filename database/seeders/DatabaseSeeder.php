<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call(CategoriaSeeder::class);
        $this->call(ProdutoSeeder::class);
        $this->call(ProjetosSeeder::class);
        $this->call(DesenvolvedoresSeeder::class);
        $this->call(AlocacoesSeeder::class);
        $this->call(ClientesSeeder::class);
    }
}
