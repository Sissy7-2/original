@extends('layouts.layout')
@section('title', 'top')

@section('content')
    <div class="container">
        <div class="row">
            @include('parts/header')
            <body>
             <br>
             <div class="container">
             <img class="eyespic" src="{{ secure_asset('/js/img/Righteye.JPG') }}">
            </div>
            </body>
    </div>
</div>
@endsection
