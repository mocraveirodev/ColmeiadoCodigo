<?php

use Illuminate\Database\Seeder;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cursos = [
            ['curso' => "HTML"],
            ['curso' => "CSS"],
            ['curso' => "Lógica"],
            ['curso' => "Javascript"],
        ];
        DB::table('cursos')->insert($cursos);
    }
}
