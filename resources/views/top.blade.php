@extends('layouts.layout')
@section('title', 'top')

@section('content')
    <div class="container">
        <div class="row">
            @include('parts/header')
            <body>
             <div class="topimg">
             <div class="container">
             <img src="{{ secure_asset('/js/img/Righteye.JPG') }}" class="img-fluid">
           </div>
           </div>
           </body>
        </div>
    </div>
@endsection
