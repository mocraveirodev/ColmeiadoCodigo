<?php

use Illuminate\Database\Seeder;

class ProgressoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $progresso = ['aluno_id' => 1, 'prog_html' => 1, 'prog_css' => 1, 'prog_logica' => 1, 'prog_js' => 1];
        DB::table('progressos')->insert($progresso);
    }
}
