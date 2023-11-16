@extends('layouts.hotelapp')

@section('title','Room_type.index')

@section('menubar')
      @parent
    ホテル内の部屋の名称と各部屋の宿泊可能人数を記載しています。
@endsection

@section('content')
<table>
    <tr>
        <th>名称</th>
        <th>宿泊可能人数</th>
    </tr>
    @foreach($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->capacity}}</td>
        </tr>
    @endforeach
</table>
@endsection

@section('footer')
copyrignt 2023 fumiya.
@endsection