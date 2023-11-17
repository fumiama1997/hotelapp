<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_type extends Model
{
   protected $guarded = array('id');

    public function getData()
    {
        return $this->name  . $this->capacity ;
    }

    
    public function rooms()
    {
        return $this->hasMany('App\Room');

    }

    //
}
