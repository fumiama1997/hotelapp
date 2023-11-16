<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
     protected $guarded = array('reserve_id');
    
     public static $rules = array(
        'guest_id' => 'required',
        
     );
   
     public function getdata()
     {
        return $this->id . ':' . $this->title;
     }

}
