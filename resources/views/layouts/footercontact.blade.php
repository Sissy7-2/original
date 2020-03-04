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
        <link href="{{ secure_asset('css/layout.css') }}" rel="stylesheet">
        </head>
        <body>
            <div id="app">
            <!--@include('parts/header')-->
            <div class="contact scroll_center" style="position: relative;">
                <div class="contact_box">
                    <a href="/contact/"></a>
                    <h2 class="initial_logo secttl">
                        ::before
                        "contact me"
                    </h2>
                    
                </div>
            </div>
            
            
            
            
            
            
                
            
            
            
            <main class="py-4">
                @yield('content')
            </main>
            </div>
        </body>
</html>