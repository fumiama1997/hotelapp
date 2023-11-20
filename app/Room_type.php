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
        return $this->name  . ':'. $this->capacity ;
    }

    
    public function room()
    {
        return $this->hasOne('App\Room');

    }

    //
}
