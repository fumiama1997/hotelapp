@extends('layouts.hotelapp')

@section('title','Reserve.Add')

@section('menubar')
     @parent
     予約ページ
@endsection

@section('content')
    <form action="/reserve/add" method="post">
    <table>
        @csrf
        <tr><th>guest_id:</th><td><input type="number" name="guest_id"></td></tr>
        <tr><th>number:</th><td><input type="text" name="number"></td></tr>
        <tr><th>check_in:</th><td><input type="date" name="check_in"></td></tr>
        <tr><th>check_out:</th><td><input type="date" name="check_out"></td></tr>
        <tr><th></th><td><input type="submit" value="送信"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyrignt 2023 fimiya.
@endsection