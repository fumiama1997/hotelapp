@extends('layouts.hotelapp')

@section('title','Reserve.index')

@section('menubar')
      @parent
      ボードページ
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
copyrignt 2023 fumiya.
@endsection