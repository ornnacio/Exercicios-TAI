<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TurmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("pt_BR");
        foreach (\range(1, 10) as $index) {
            DB::table('turma')->insert([
                'nome' => $faker->name,
                'codigo' => $faker->randomNumber($nbDigits = 9, $strict = false),
                'descricao' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
                'curso_id' => random_int(1, 3),
            ]);
        }
    }
}
