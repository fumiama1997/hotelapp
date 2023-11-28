@extends('layouts.hotelapp')

@section('title','Detail.Add')

@section('menubar')
     @parent
    詳細登録ページ
@endsection

@section('content')
    <form action="/detail/add" method="post">
    <table>
        @csrf
        <tr><th>reserve_id:</th><td><input type="number" name="reserve_id"></td></tr>
        <tr><th>room_type_id:</th><td><input type="number" name="room_type_id"></td></tr>
        <tr><th>Accommodation:</th><td><input type="date" name="Accommodation"></td></tr>
        <tr><th>hotel_fee:</th><td><input type="number" name="hotel_fee"></td></tr>
    <tr><th></th><td><input type="submit" value="送信"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyrignt 2023 fumiya
@endsection