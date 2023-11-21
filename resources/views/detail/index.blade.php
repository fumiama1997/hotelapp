@extends('layouts.hotelapp')

@section('title', 'Detail.index')

@section('menubar')
    @parent
    予約詳細情報
@endsection

@section('content')
    <table>
        <tr>
            <th>詳細一覧</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->getData() }}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
copyrignt 2023 fumiya.
@endsection
