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
             <img src="{{ secure_asset('/js/img/Righteye.JPG') }}" class="img-fluid">
            </body>
        </div>
    </div>
</div>
@endsection
