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
        $this->call(guestsTableSeeder::class);
        $this->call(reservesTableSeeder::class); 
        // $this->call(UsersTableSeeder::class);
    }
}
