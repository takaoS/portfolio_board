@extends('layouts.master')

@section('title', 'Person.index')

@section('content')
<!-- Form for find user -->
<form class="my-3" action="/person/find" method="post">
    {{ csrf_field() }}
    <input type="text" name="input" placeholder="Input Person ID">
    <input type="submit" value="find">
</form>

{{--  View でのコメントアウト
<table class="table">
    <thead class="thead-dark">
        <tr><th>ID</th><th>Name</th><th>Mail</th><th>Age</th><th>Boards</th></tr>
    </thead>
    <tbody>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->id }}</td><td>{{ $item->name }}</td><td>{{ $item->mail }}</td><td>{{ $item->age }}</td>
            <td>
                @if ($item->boards != null)
                <table>
                    @foreach ($item->boards as $board)
                    <tr><td class="border-0 p-0"><div class="border m-1 p-1">{{ $board->getTitle() }}</div></td></tr>
                    @endforeach
                </table>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
--}}

{{-- タブメニューの設定 ここから --}}
<div class="container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="#introduction" class="nav-link active" data-toggle="tab">Introduction</a>
        </li>
        <li class="nav-item">
            <a href="#person_list" class="nav-link" data-toggle="tab">Person List</a>
        </li>
    </ul>

    <div class="tab-content py-4">

        <div id="introduction" class="tab-pane active">
            <h2>このポートフォリオの機能について</h2>
            <br>
            <p>掲示板に記事を投稿できるアプリです。</p>
            <p>現在は Ver.1 で、適宜修正を加える予定です。</p>
            <br>
            <p>以下が機能の一覧です。</p>
            <ul>
                <li class="mb-3">
                    <b>Person.index：</b><br>
                    このページです。このポートフォリオの説明と、ユーザ情報の一覧が表示されます。<br>
                    また、ユーザIDを入力して、ユーザの検索ができます。<br>
                    ヘッダーメニューの「Home」からアクセスできます。
                </li>
                <li class="mb-3">
                    <b>Person.add：</b><br>
                    ユーザの登録ができます。<br>
                    ヘッダーメニューの「Person Add」からアクセスできます。
                </li>
                <li class="mb-3">
                    <b>Board.index：</b><br>
                    掲示板です。ユーザが投稿した記事が一覧表示されます。<br>
                    記事のタイトルをクリックすると、その記事の内容を確認できます。<br>
                    ヘッダーメニューの「Board List」からアクセスできます。
                </li>
                <li class="mb-5">
                    <b>Board.add：</b><br>
                    掲示板に記事を投稿できます。<br>
                    ヘッダーメニューの「Board Add」からアクセスできます。
                </li>
            </ul>

            <h2>開発環境について</h2>
            <br>
            <p>OSは macOS Catalina です。</p>
            <p>Laradock を用いて、Laravel 5.8 で作成しています。</p>
            <p>主なスタイルには Bootstrap4 を利用しています。</p>
            <p>CSSを書く際には、Sass を用いてコンパイルしています。</p>
            <br>
            <p>ソースコードはGitHubで公開しています。</p>
            <p>画面右下のGitHubアイコンからアクセスできます。</p>
        </div>

        <div id="person_list" class="tab-pane">
            <table class="table">
                <thead class="thead-dark">
                    <tr><th>ID</th><th>Name</th><th>Mail</th><th>Age</th><th>Boards</th></tr>
                </thead>
                <tbody>
                    @foreach($hasItems as $item)
                    <tr>
                        <td>{{ $item->id }}</td><td>{{ $item->name }}</td><td>{{ $item->mail }}</td><td>{{ $item->age }}</td>
                        <td>
                            <table>
                                @foreach ($item->boards as $board)
                                <tr><td class="border-0 p-0"><div class="border m-1 p-1">{{ $board->getTitle() }}</div></td></tr>
                                @endforeach
                            </table>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <table class="table">
                <thead class="thead-dark">
                    <tr><th>ID</th><th>Name</th><th>Mail</th><th>Age</th></tr>
                </thead>
                <tbody>
                    @foreach($noItems as $item)
                    <tr><td>{{ $item->id }}</td><td>{{ $item->name }}</td><td>{{ $item->mail }}</td><td>{{ $item->age }}</td></tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
{{-- タブメニューの設定 ここまで --}}



@endsection
