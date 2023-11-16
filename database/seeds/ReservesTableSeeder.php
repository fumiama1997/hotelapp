<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reserves')->truncate();
        DB::table('reserves')->insert([
           
            'guest_id' =>'1',
            'number' =>'2',
            'check_in' =>'2023/11/18',
            'check_out' =>'2023/11/19',
        ]);
    }
}
