@extends('layouts.app')

@section('title', 'Index')

@section('content')
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>予約日</th>
                <th>ユーザー名</th>
                <th>タイトル</th>
                <th>詳細</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->id }}</td>
                    <td>{{ $reservation->date }}</td>
                    <td>{{ $reservation->user->name }}</td>
                    <td>{{ $reservation->book->title }}</td>
                    <td><a href="{{ route('reservation.show', $reservation->id) }}">詳細へ</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('footer')
    copyright 2022 hirogical.
@endsection
