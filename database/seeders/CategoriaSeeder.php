<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = DB::table('categorias')->get()->count();
        if ($count == 0) {
            //
            DB::table('categorias')->insert(['nome'=>'Roupas']);
            DB::table('categorias')->insert(['nome'=>'Eletronicos']);
            DB::table('categorias')->insert(['nome'=>'Perfumes']);
            DB::table('categorias')->insert(['nome'=>'Moveis']);
            DB::table('categorias')->insert(['nome'=>'Alimentos']);
            DB::table('categorias')->insert(['nome'=>'Informatica']);
        }

    }
}
