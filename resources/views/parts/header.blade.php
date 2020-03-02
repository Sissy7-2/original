<!DOCTYPE html>
<html lang="{{ app()->getlocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
        
        <script src="{{ secure_asset('js/app.js') }}" defer></script> 
        
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/header.css') }}" rel="stylesheet">
        </head>
        <body>
        <header class="container">
        <div class="row">
            <h2 class="text-left">eye's project</h2>
            <nav>
                <ul class="row">
                    <li><a href="#">profile</a></li>
                    <li><a href="#">about</a></li>
                    <li><a href="#">details</a></li>
                    <li><a href="#">contact</a></li>
                    <li><a class="instagram-btn" href="#">instagram</a></li>
                </ul>
            </nav>
            <p class="language_change-btn">言語変更ボタン</p>
            @csrf
        </div>
    </header>
    </body>
@endsection
