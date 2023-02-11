<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <!--favicon-->
        <link rel="icon" href="{{asset('favicon.ico')}}" sizes="any">
        <link rel="apple-touch-icon" href="{{asset('favicon.ico')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/bootstrap5.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vir-index.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />  
    </head>
    <body>
    
  
    <div class="container" id="con-for-logo-nav">
        <div class="row">
            <div class="col-5"><a href="/"> 
                <img src="{{URL('images/logovir.png')}}" class="main-logo" width="350"></a>
            </div>
            <div class="col-7">
                @include('layouts.navbar') 
            </div>
        </div>
    </div>
    <div>
        @yield('home')
        @yield('howitswork')
        @yield('medical')
        @yield('emergency')
        @yield('education')
        @yield('login')
        @yield('registration')
    </div>
        <div>
            @include('layouts.footer')
        </div>
    
            <script src="{{ asset ('js/jquery363min.js') }}"> </script>
            <script src="{{ asset ('js/bootstrap5.bundle.js') }}"> </script>
    </body>
</html>
