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
            ['curso' => "html"],
            ['curso' => "css"],
            ['curso' => "logica"],
            ['curso' => "js"],
        ];
        DB::table('cursos')->insert($cursos);
    }
}
