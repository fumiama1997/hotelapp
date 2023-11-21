@extends('layouts.hotelapp')

@section('title','Room.Add')

@section('menubar')
    @parent
    部屋種別IDと部屋番号
@endsection

@section('content')
   <form action="/room/add" method="post">
   <table>
        @csrf
    <tr><th>room_id: </th><td><input type="number" name="room_type_id"></td></tr> 
    <tr><th>number: </th><td><input type="number" name="number"></td></tr> 
    <tr><th></th><td><input type="submit" value="send"></td></tr>   
   </table>
   </form>
@endsection

@section('footer')
copyrignt 2023 fumiya.
@endsection