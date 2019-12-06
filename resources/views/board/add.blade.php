@extends('layouts.master')

@section('title', 'Board.add')

@section('content')
    <form action="/board/add" method="post">
        {{ csrf_field() }}
        <div class="container">

            <div class="row mt-4">
                <div class="col-md-4"><lavel>Person ID</lavel></div>
                {{-- size属性はブラウザごとに解釈が異なるため、style属性でテキストボックスの長さを指定する --}}
                <div class="col-md-8"><input type="number" name="person_id" value="" style="width:50px;"></div>
            </div>

            <div class="row my-2">
                <div class="col-md-4"><lavel>Title</lavel></div>
                <div class="col-md-8"><input type="text" name="title" value="" style="width:500px;"></div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4"><lavel>Body</lavel></div>
                <div class="col-md-8"><input type="text" name="body" value="" style="width:500px;"></div>
            </div>

        </div>
        <div class="text-center"><input type="submit" name="" value="Add Board"></div>
    </form>
@endsection
