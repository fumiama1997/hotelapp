@extends('layouts.hotelapp')

@section('title','Room.index')

@section('menubar')
     @parent
    ボード・ページ
@endsection

@section('content')
    <table>
        <tr><th>Data</th></tr>
        @foreach($items as $item)
        <tr>
            <td>{{$item->getData()}}</td>
        </tr>
        @endforeach
    </table>
@endsection

@section('footer')
copyrignt 2023 fumiya .
@endsection