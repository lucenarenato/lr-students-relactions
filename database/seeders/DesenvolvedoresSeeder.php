<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesenvolvedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = DB::table('desenvolvedores')->get()->count();
        if ($count == 0) {
                    //
            DB::table('desenvolvedores')->insert([
                'nome'=>'Renato de Oliveira Lucena',
                'cargo'=>'Programador FullStack'
            ]);
            DB::table('desenvolvedores')->insert([
                'nome'=>'Walfran Paiva',
                'cargo'=>'Programador .NET'
            ]);
            DB::table('desenvolvedores')->insert([
                'nome'=>'Angelo Patricio',
                'cargo'=>'Programador Front-End'
            ]);
        }

    }
}
