@extends('layouts.master')

@section('title', 'Board.index')

@section('content')
<table class="table">
    <thead class="table-dark"><tr><th>Title</th><th>Person</th></tr></thead>
    @foreach ($boards as $board)
    {{-- withメソッドで関連レコードを取得できているかの確認 --}}
    <tbody><tr><td><a href="/board/show/{{ $board->id }}">{{ $board->title }}</a></td><td>{{ $board->person->name }}</td></tr></tbody>
    @endforeach
</table>
@endsection
