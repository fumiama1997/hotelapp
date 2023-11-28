<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
     protected $guarded = array('reserve_id');
    
     public static $rules = array(
        'guest_id' => 'required',
        'number'=>'required',
        'check_in'=>'required',
        'check_out'=>'required'     
     );
   
     public function getData()
     {
        return    'チェックイン   '. $this->check_in . '   チェックアウト' . $this->check_out. '   利用人数' . $this->number ;
     }

     
    public function details()
    {
        return $this->hasMany('App\Detail');
    }
}
