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
        DB::table('cursos')->insert([
            'curso' => "HTML"
        ]);
        DB::table('cursos')->insert([
            'curso' => "CSS"
        ]);
        DB::table('cursos')->insert([
            'curso' => "Lógica"
        ]);
        DB::table('cursos')->insert([
            'curso' => "Javascript"
        ]);
    }
}
