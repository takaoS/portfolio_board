@extends('layouts.master')

@section('title', 'Person.add')

@section('content')
    <form action="/person/add" method="post">
        {{ csrf_field() }}
        <div class="container">

            <div class="row mt-4">
                <div class="col-md-4"><lavel>Name</lavel></div>
                {{-- size属性はブラウザごとに解釈が異なるため、style属性でテキストボックスの長さを指定する --}}
                <div class="col-md-8"><input type="text" name="name" value="" style="width:500px;"></div>
            </div>

            <div class="row my-2">
                <div class="col-md-4"><lavel>Email</lavel></div>
                <div class="col-md-8"><input type="email" name="mail" value="" style="width:500px;"></div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4"><lavel>Age</lavel></div>
                <div class="col-md-8"><input type="number" name="age" value="" style="width:50px;"></div>
            </div>

        </div>
        <div class="text-center"><input type="submit" name="" value="Sign Up"></div>
    </form>

@endsection
