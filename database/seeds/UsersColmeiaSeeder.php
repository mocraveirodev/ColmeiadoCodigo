<?php

use Illuminate\Database\Seeder;

class UsersColmeiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => 'admin@email.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
