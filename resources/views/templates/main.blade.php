<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name = "csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Regiomahl App') }}</title>
     {{--  Font Awesome --}}
     <link
     rel="stylesheet"
     href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"/>
    {{--  Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,600|Montserrat:300,300i,400,400i,500,500i,600,600i,700|Ubuntu:300,300i,400,400i,500,500i,700" rel="stylesheet">
    {{-- <link rel="stylesheet" href="css/icon-font.css"> --}}
    {{--  Styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{--  Javascript --}}
    <script src="{{ asset('js/app.js') }} " defer></script>

  </head>
{{-- Navigation Part for normal not logged in users  --}}
<div class="main__navbar">
  <div class="main__hamburger--menu">
    <div class="main__line main__line--1"></div>
    <div class="main__line main__line--2"></div>
    <div class="main__line main__line--3"></div>
  </div>

  <ul class="main__nav--list">
    <li class="main__nav--item">
      <a href="{{ url('/main') }}" class="main__nav--link">Home</a>
    </li>
    <li class="main__nav--item">
      {{-- <a href="{{ route('admin.users.index') }}" class="main__nav--link">Users </a> --}}
    </li>
    <li class="main__nav--item">
      <a href="#" class="main__nav--link">Die Idee </a>
    </li>
    <li class="main__nav--item">
      <a href="#" class="main__nav--link">Über uns </a>
    </li>
    <li class="main__nav--item">
      <a href="#" class="main__nav--link">Kontakt </a>
    </li>

        @if (Route::has('login'))
          <div>
              @auth
              <li class="main__nav--item">
                  <a class="main__nav--link" href="{{ route('access') }}" >Home</a>
              </li>
              <li class="main__nav--item">
                  <a class="main__nav--link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                  <form id="logout-form"action="{{ route('logout') }}" method="POST" style= "display:none">
                    @csrf

                  </form>
              </li>
              @else
              <li class="main__nav--item">
                  <a class="main__nav--link" href="{{ route('login') }}">Gastronomie</a>

              </li>
                  {{-- @if (Route::has('register'))
                  <li class="main__nav--item">
                      <a class="main__nav--link" href="{{ route('register') }}" >Register</a>
                  </li>
                  @endif --}}
              @endauth
          </div>
        @endif


  </ul>

</div>
{{-- Start main part --}}
<main>
  @yield('content')
</main>

{{-- End main part --}}

{{-- Javascript for Navigation Menu --}}
<script>
  const menuIcon = document.querySelector('.main__hamburger--menu');
  const navbar = document.querySelector('.main__navbar');

  menuIcon.addEventListener('click', () => {
  navbar.classList.toggle('change');
  });
 </script>

