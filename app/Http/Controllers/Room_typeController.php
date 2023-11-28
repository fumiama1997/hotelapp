<?php

namespace App\Http\Controllers;

use App\Room_type;
use Illuminate\Http\Request;

class Room_typeController extends Controller
{
    public function index(Request $request)
    {
        $items = Room_type::all();
        return view('room_type.index',['items'=>$items]);
    }
    //

   public function add(Request $request)
   {
    return view('room_type.add');
   }

   public function create(Request $request)
   {
    $this->validate($request, Room_type::$rules);
    $room_type = new Room_type;
    $form = $request->all();
    unset($form['_token']);
    $room_type->fill($form)->save();
    return redirect('/room_type') ;
   }

}
