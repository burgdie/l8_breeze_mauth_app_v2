<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- Own CSS File --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body class="">
{{--
        <header class="header">
          <div>
            <a class= "construction__link" href="{{ route('construction.login') }}" class="">Verify Access</a>
          </div>




        </header> --}}
        <div class="">

                        <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
                            {{-- @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Dashboard</a>
                            @else --}}
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Log in</a>

                                {{-- @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline dark:text-gray-500">Register</a>
                                @endif
                            @endauth --}}
                        </div>

        </div>


    </body>
</html>
