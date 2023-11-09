@extends('layouts.hotelapp')

@section('title','Guest.index')

@section('menubar')
    @parent
  下記入力の上送信ボタンを押してください
@endsection

@section('content')
   @if(count($errors)> 0)
   <div>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
   </div>
   @endif
<form action="/guest/add" method="post">
<table>
   @csrf
   <tr><th>name:</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
   <tr><th>address:</th><td><input type="text" name="address" value="{{old('address')}}"></td></tr>
   <tr><th>telephone_number:</th><td><input type="text" name="telephone_number" value="{{old('telephone_number')}}"></td></tr>
   <tr><th></th><td><input type="submit" value="送信"></td></tr>
</table>
</form>
@endsection

@section('footer')
copyrignt 2023 amano.
@endsection