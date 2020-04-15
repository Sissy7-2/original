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
        
        <script src="https://kit.fontawesome.com/dba3a9d787.js" crossorigin="anonymous"></script>
        
        </head>
        <body>
            @include('parts/logo')
            <div class="container-fluid mx-5">
            <div class="header float-right">
           　<nav>
              <ul>
               <li><a href="/profile">profile</a></li>
               <li><a href="/about">about</a></li>
               <li><a href="/details">details</a></li>
               <li><a href="/contact">contact</a></li>
               <li><a href="https://www.instagram.com/marie2x6.2/" class="flowbtn10"><i class="fab fa-instagram"></i>
               </a></li>
             </ul>
             </nav>
            </div>
            </div>
        </header>
        </body>