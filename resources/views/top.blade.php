@extends('layouts.layout')
@section('title', 'top')

@section('content')
    <div class="container">
        <div class="row">
            @include('parts/header')
            <div class="col-md-12">
            <div class="m">
            <body>
             <br>
             <div class="pic">
             <img class="eyespic" src="{{ secure_asset('/js/img/Righteye.JPG') }}">
            </div>
            </body>
        </div>
    </div>
</div>
@endsection
