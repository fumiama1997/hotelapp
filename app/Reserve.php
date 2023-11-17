<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
     protected $guarded = array('reserve_id');
    
     public static $rules = array(
        'guest_id' => 'required',
        
     );
   
     public function getData()
     {
        return    'チェックイン   '. $this->check_in . '   チェックアウト' . $this->check_out. '   利用人数' . $this->number ;
     }

}
