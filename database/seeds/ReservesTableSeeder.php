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
      $param = [
            'guest_id' =>'1',
            'number' =>'2',
            'check_in' =>'2023/11/18',
            'check_out' =>'2023/11/19',
      ];
      DB::table('reserves')->insert($param);
    }
}
