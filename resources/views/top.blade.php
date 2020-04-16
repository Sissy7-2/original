@extends('layouts.layout')
@section('title', 'top')

@section('content')
            @include('parts/header')
            <body>
            <div class="container-fluid mt-5">
             <img src="{{ secure_asset('/js/img/Righteye.JPG') }}" class="img-fluid mt-4" alt="Responsive image">
           </div>
           </body>
@endsection
