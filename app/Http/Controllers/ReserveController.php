<?php

namespace App\Http\Controllers;

use App\Reserve;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function index(Request $request)
    {
        $items = Reserve::all();
        return view('reserve.index',['items'=>$items]);
    }

    public function add(Request $request)
    {
        return view('reserve.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Reserve::$rules);
        $reserve = new Reserve;
        $form = $request->all();
        unset($form['_token']);
        $reserve->fill($form)->save();
        return redirect('/reserve'); 
    }
}
