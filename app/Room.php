<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'room_type_id'=> 'required',
        'number' => 'required',
    );
    public function getData()
    {
        return $this->number . '号室';
    }

    public function details()
    {
        return $this->hasMany('App\Detail');
    }
    
}
