<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'room_id'=> 'required',
        'number' => 'required',
    );
    public function getData()
    {
        return $this->room_id . ': ' . $this->number;
    }
    //
}
