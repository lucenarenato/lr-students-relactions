<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlocacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = DB::table('alocacoes')->get()->count();
        if ($count == 0) {
                //
            DB::table('alocacoes')->insert([
                'projeto_id'=>1,
                'desenvolvedor_id'=>1,
                'horas_semanais'=>11
            ]);
            DB::table('alocacoes')->insert([
                'projeto_id'=>1,
                'desenvolvedor_id'=>2,
                'horas_semanais'=>13
            ]);
            DB::table('alocacoes')->insert([
                'projeto_id'=>2,
                'desenvolvedor_id'=>3,
                'horas_semanais'=>12
            ]);
            DB::table('alocacoes')->insert([
                'projeto_id'=>2,
                'desenvolvedor_id'=>1,
                'horas_semanais'=>20
            ]);
            DB::table('alocacoes')->insert([
                'projeto_id'=>2,
                'desenvolvedor_id'=>2,
                'horas_semanais'=>16
            ]);
            DB::table('alocacoes')->insert([
                'projeto_id'=>3,
                'desenvolvedor_id'=>3,
                'horas_semanais'=>5
            ]);
        }
    }
}
