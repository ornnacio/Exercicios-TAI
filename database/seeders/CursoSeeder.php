<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            'nome' => 'tec informática',
            'abreviatura' => 'info',
            'data_inicio' => '2019-01-01',
            'data_fim' => '2021-01-01'
        ]);
        DB::table('cursos')->insert([
            'nome' => 'tec mecânica',
            'abreviatura' => 'mec',
            'data_inicio' => '2019-01-01',
            'data_fim' => '2021-01-01'
        ]);
        DB::table('cursos')->insert([
            'nome' => 'eng elétrica',
            'abreviatura' => 'eng_eletr',
            'data_inicio' => '2019-01-01',
            'data_fim' => '2021-01-01'
        ]);
    }
}
