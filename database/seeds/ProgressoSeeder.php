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
        $progresso = ['aluno_id' => 1, 'prog_html' => 0, 'prog_css' => 0, 'prog_logica' => 0, 'prog_js' => 0, 'prog_geral' => 0];
        DB::table('progressos')->insert($progresso);
    }
}
