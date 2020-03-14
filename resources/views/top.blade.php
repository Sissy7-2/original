@extends('layouts.layout')
@section('title', 'top')

@section('content')
<div class="container">
    <div class="row">
        @include('parts/header')
        <div class="col-md-8 mx-auto">
            目の画像が入る予定
            @php
                $image_rand = array(
                    "img/Righteye.JPG",
                    "img/Lefteye.JPG",
                 );
     
                $image_rand = $image_rand[mt_rand(0, count($image_rand)-1)];
                echo '<img src="'.$image_rand.'" alt="">';
            @endphp
        </div>
    </div>
</div>
@endsection
