@extends('layouts.layout')
@section('title', 'top')

@section('content')
    <div class="container">
        <div class="row">
            @include('parts/header')
            <div class="col-md-12">
            <div class="mx-auto" style="width:800px;">
            <div class="m">
            <body>
                    <?php
                        $image_rand = array(
                            "img/Righteye.JPG",
                            "img/Lefteye.JPG",
                        );
                         
                        $image_rand = $image_rand[mt_rand(0, count($image_rand)-1)];
                        echo '<img src="'.$image_rand.'" alt="">';
                     ?>
            </body>
        </div>
    </div>
</div>
@endsection
