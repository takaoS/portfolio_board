@extends('layouts.master')

@section('title', 'Person.find')

@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
        </thead>
        <tbody>
            @if (isset($item))
                <tr><td>{{ $item->name }}</td><td>{{ $item->mail }}</td><td>{{ $item->age }}</td></tr>
            @endif
        </tbody>
    </table>

    <form class="" action="/person/delete" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $item->id }}">
        <input type="submit" name="" value="delete">
    </form>
@endsection
