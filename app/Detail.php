<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'reserve_id'=>'required',
        'room_id'=>'required',
        'Accommodation'=>'required',
        'hotel_fee'=>'required',
    );

    public function getData()
    {
        return $this->Accommodation . ':'  .$this->hotel_fee;
    }
    //
}
