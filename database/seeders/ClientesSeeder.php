<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Endereco;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = Cliente::all()->count();

        if ($count == 0) {
            //
            $cliente = Cliente::create([
                'nome'=>'Leidiany Cardoso Costa Lucena',
                'idade'=>34,
                'endereco'=>'Goiania',
                'email'=>'leidy@mail.net',
                'telefone'=>'999998888',
            ]);

            $endereco = Endereco::create([
                'cliente_id' => $cliente->id,
                'rua' => 'algum lugar de goiania',
                'numero' => 1,
                'bairro' => 'faicailville',
                'cidade' => 'Goiânia',
                'uf' => 'GO',
                'cep' => '74000000'
            ]);
        }
    }
}
