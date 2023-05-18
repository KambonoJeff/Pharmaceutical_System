<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('style.css')}}">
     </head>
    <body>
        <div class="box-90 grid">
                <div class="flex box-90">
                    <span>SystemLogo

                    </span>

                    <div class="flex">


                        @auth
                        <h2>
                            <a href="http:{{ route('community') }}">Community</a>
                        </h2>
                            <h2>{{ auth()->user()->name}}</h2>

                            <h2><a href="{{ route('logout') }}" class="">Logout</a></h2>

                        @endauth
                        @guest
                        <h2>
                            <a href="http:{{ route('community') }}">Community</a>
                        </h2>
                        <h2><a href="{{ route('home') }}" class="">Home</a></h2>
                        <h2><a href="{{ route('register') }}" class="">Register</a></h2>
                        @endguest

                    </div>
                </div>
                <br>
                <br>
                <br>
            <div class="">
                <h1 align="center">Pharmarceutical system By KambonoJeff</h1>
                @yield('content')


            </div>
        </div>
    </body>
</html>
