<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = DB::table('projetos')->get()->count();
        if ($count == 0) {
            //
            DB::table('projetos')->insert([
                'nome'=>'Sistema Hospitalar',
                'estimativa_horas'=>2000
            ]);
            DB::table('projetos')->insert([
                'nome'=>'Sistema de alocação',
                'estimativa_horas'=>2000
            ]);
            DB::table('projetos')->insert([
                'nome'=>'Sistema de biblioteca',
                'estimativa_horas'=>1500
            ]);
            DB::table('projetos')->insert([
                'nome'=>'Sistema de vendas',
                'estimativa_horas'=>3000
            ]);
            DB::table('projetos')->insert([
                'nome'=>'Sistema de erp',
                'estimativa_horas'=>5000
            ]);
        }
    }
}
