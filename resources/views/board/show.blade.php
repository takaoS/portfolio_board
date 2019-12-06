@extends('layouts.master')

@section('title', 'Board.show')

@section('content')
<table class="table">
    <thead class="table-dark"><tr><th>Title</th></tr></thead>
    <tbody><tr><td>{{ $board->title }}</td></tr></tbody>
    <thead class="table-dark"><tr><th>Body</th></tr></thead>
    <!--
        本文には改行が入る可能性があるので、その改行を<br>に変換したい。
        まずは二重波括弧ではなく、中身をエスケープしないで値を出力するための {{!! !!}} という命令を使う。
        この中に $post->body を入れていきたいのですが、
        一旦 Laravel の e() ヘルパーでエスケープしつつ、
        それを nl2br() で挟んであげて、改行を<br>に変換 
    -->
    <tbody><tr><td>{{!! nl2br(e($board->body)) !!}}</td></tr></tbody>
</table>
@endsection
