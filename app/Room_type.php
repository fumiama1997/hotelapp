<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_type extends Model
{
   protected $guarded = array('id');


   public static $rules = array(
        'name' => 'required',
        'capacity' => 'integer|min:1|max:8'
    );

    public function getData()
    {
        return '部屋名：'. $this-> name  . ' 、 宿泊可能人数:'. $this->capacity ;
    }

    
    public function rooms()
    {
        return $this->hasMany('App\Room');

    }

    //
}
