<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150'
    );
    
    public function getdata()
    {
        return $this->id . ':'  . $this->name . '(' . $this->age . ')';
    }
}
