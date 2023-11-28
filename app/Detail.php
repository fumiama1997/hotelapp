<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'reserve_id'=>'required',
        'room_type_id'=>'required',
        'Accommodation'=>'required',
        'hotel_fee'=>'required',
    );

    public function getData()
    {
        return '予約ID'.  $this->reserve_id. ':部屋ID'. $this->room_type_id.  ':宿泊日'.$this->Accommodation . ':料金'  .$this->hotel_fee;
    }
    //
}
