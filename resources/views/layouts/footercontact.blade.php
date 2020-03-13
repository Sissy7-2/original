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
        <link href="{{ secure_asset('css/footercontact.css') }}" rel="stylesheet">
        </head>
        <body>
         <main class="py-4">
            @yield('content')
         </main>
        <footer>
            <div class="container mx-auto pt-5">
            <div class="text-center">
            <p class="col-md-12 mx-auto contactbg text-center"><a href="/contact">contact me</a></p>
         </footer>
         </div>
           </div>
         </div>
       </div>
            
    </div>
   </div>
</div>
            
</body>
</html>