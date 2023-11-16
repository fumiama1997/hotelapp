<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Room_typeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  
     $param = [
        'name'=> '花の間',
        'capacity' => '4',
     ];
     DB::table('room_types')->insert($param);

     $param = [
        'name'=> '草の間',
        'capacity' => '6',
     ];
     DB::table('room_types')->insert($param);

     $param = [
        'name'=> '泥の間',
        'capacity' => '2',
     ];
     DB::table('room_types')->insert($param);

     $param = [
        'name'=> '空の間',
        'capacity' => '8',
     ];
     DB::table('room_types')->insert($param);

        //
    }
}
