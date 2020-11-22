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
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Jorge Morales',
            'email' => 'jorge.380171120914@ucaldas.edu.co',
            'password' => bcrypt('jorge7415'),
        ]);
    }
}