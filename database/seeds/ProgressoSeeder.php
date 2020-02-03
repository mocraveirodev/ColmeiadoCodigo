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
        $progresso = ['aluno_id' => 1, 'progresso_id' => 1];
        DB::table('progressos')->insert($progresso);
    }
}
