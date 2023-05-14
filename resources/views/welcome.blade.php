<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('style.css')}}">

     </head>
    <body class="antialiased">
        <div class="box-90">

                <div class="flex box-90">
                    <span>SystemLogo</span>
                        <div class="flex">
                        <h2><a href="{{ url('/home') }}" class="">Home</a></h2>
                        <h2><a href="{{ route('register') }}" class="">Register</a></h2>
                        <h2><a href="{{ route('login') }}" class="">Login</a></h2>
                        <h2><a href="{{ route('logout') }}" class="">Logout</a></h2>
                        </div>



                </div>


            <div class="">
                <h1 align="center">Pharmarceutical system By KambonoJeff</h1>
                @yield('content')

            </div>
        </div>
    </body>
</html>
