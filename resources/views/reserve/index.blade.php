@extends('layouts.hotelapp')

@section('title','Reserve.index')

@section('menubar')
      @parent
      ボードページ
@endsection

@section('content')
    <table>
        <tr>
            <th>お部屋</th>
            <th>予約詳細情報</th>
        </tr>
        
        @foreach($items as $item)
        <tr>
            <td>{{$item->getData()}}</td>
            <td>
              @if($item->details != null)
              <table width="100%">
                @foreach($item->details as $obj)
                <tr><td>{{$obj->getData()}}</td></tr>
                @endforeach
              </table>
              @endif
            </td>
        </tr>
        @endforeach
    </table>
@endsection

@section('footer')
copyrignt 2023 fumiya.
@endsection