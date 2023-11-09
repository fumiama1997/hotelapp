@extends('layouts.hotelapp')

@section('title','Guest.index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr>
            <th>名前</th>
            <th>住所</th>
            <th>電話番号</th>
        </tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->telephone_number}}</td>
            </tr>
        @endforeach
</table>
@endsection

@section('footer')
copyrignt 2023 fumiyaya
