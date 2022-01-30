@extends('layouts.app')

@section('title', 'Show')

@section('content')
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>予約日</th>
                <th>ユーザー名</th>
                <th>タイトル</th>
                <th>著者</th>
                <th>出版社</th>
                <th>出版日</th>
                <th>ISBN13</th>
                <th>金額</th>
                <th>ページ数</th>
                <th>言語コード</th>
                <th>主なタグ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $reservation->id }}</td>
                <td>{{ $reservation->date }}</td>
                <td>{{ $reservation->user->name }}</td>
                <td>{{ $reservation->book->title }}</td>
                <td>{{ $reservation->book->author->name }}</td>
                <td>{{ $reservation->book->publisher->name }}</td>
                <td>{{ $reservation->book->date_of_publication }}</td>
                <td>{{ $reservation->book->isbn }}</td>
                <td>{{ $reservation->book->price }}円</td>
                <td>{{ $reservation->book->pages }}p</td>
                <td>{{ $reservation->book->language_code }}</td>
                @if ($reservation->book->tags->first())
                    <td>{{ $reservation->book->tags->first()->name }}</td>
                @else
                    <td>なし</td>
                @endif
            </tr>
        </tbody>
    </table>
    <hr>
    <a href="#" class="btn btn-secondary" onclick='window.history.back(-1);'>戻る</a>
@endsection

@section('footer')
    copyright 2022 hirogical.
@endsection
