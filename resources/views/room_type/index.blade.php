@extends('layouts.hotelapp')

@section('title', 'Room_type.index')

@section('menubar')
    @parent
    ホテル内の部屋の名称と各部屋の宿泊可能人数を記載しています。
@endsection

@section('content')
    <table>
        <tr>
            <th>room_type</th>
            <th>room</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->getData()}}</td>
                <td>
                    @if ($item->rooms != null)
                        <table width="100%">
                            @foreach ($item->rooms as $obj)
                                <tr>
                                    <td>{{$obj->getData()}}</td>
                                </tr>
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
