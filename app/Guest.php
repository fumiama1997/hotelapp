<?php
//やっと家のパソコンでデータベースにつながったぞ
namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $primeryKey='guest_id';

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150'
    );
    
    public function getData()
    {
        return $this->id . ':'  . $this->name . '(' . $this->age . ')';
    }

    public function reserves()
    {
        return $this->hasMany('App\Reserve');
    }
}
