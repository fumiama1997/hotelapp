<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;

class DetailController extends Controller
{
    public function index(Request $request)
    {
        $items = Detail::all();
        return view('detail.index',['items'=> $items]);
    }

    public function add(Request $request)
    {
        return view('detail.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Detail::$rules);
        $detail = new Detail;
        $form = $request->all();
        unset($form['_token']);
        $detail->fill($form)->save();
        return redirect('/detail');
    }



    //
}
