@extends('layouts.hotelapp')

@section('title', 'Guest.index')

@section('menubar')
    @parent
    従業員用 予約確認一覧
@endsection

@section('content')
    <table>
        <tr>
            <th>Guest</th>
            <th>Reserve</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->getData() }}</td>
                <td>
                    @if ($item->reserves != null)
                        <table width="100%">
                            @foreach ($item->reserves as $obj)
                                <tr>
                                    <td>{{ $obj->getData() }}</td>
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
    copyrignt 2023 fumiyaya
