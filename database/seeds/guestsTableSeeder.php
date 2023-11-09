<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class guestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $param = [
            'name' => 'nakata',
            'address' => '奈良県橿原市',
            'telephone_number' => '09088417731',
        ];
        DB::table('guests')->insert($param);
        //
    }
}
