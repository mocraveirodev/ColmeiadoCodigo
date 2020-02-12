<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CursosSeeder::class);
        $this->call(ConteudosSeeder::class);
        $this->call(QuizSeeder::class);
        $this->call(ProgressoSeeder::class);
    }
}
