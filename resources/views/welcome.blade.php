<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('style.css')}}">

     </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">

                        <a href="{{ url('/home') }}" class="font-semibold text-blue-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>

                        <a href="{{ route('login') }}" class="font-semibold text-yellow-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>


                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-yellow-600 hover:text-yellow-900 dark:text-gray-400 dark:hover:text-yellow focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>


                </div>


            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <h1 style="color:aqua;" align="center">Pharmarceutical system By KambonoJeff</h1>
            </div>
        </div>
    </body>
</html>
