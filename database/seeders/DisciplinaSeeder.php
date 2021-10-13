<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disciplinas')->insert([
            'nome' => 'topicos avançados em info',
            'carga_horaria' => 100,
        ]);
        DB::table('disciplinas')->insert([
            'nome' => 'prog mobile',
            'carga_horaria' => 80,
        ]);
        DB::table('disciplinas')->insert([
            'nome' => 'algoritmos',
            'carga_horaria' => 120,
        ]);
    }
}
