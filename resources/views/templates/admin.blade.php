<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

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

<body>
  <div class="admin__container">
    <nav class="admin__sidebar">
      <div class="admin__hamburger-menu">
        <div class="admin__line admin__line-1"></div>
        <div class="admin__line admin__line-2"></div>
        <div class="admin__line admin__line-3"></div>
      </div>
      <div class="admin__card">
        <div class="admin__card-img">
          <img src="{{ asset }}" alt="">
        </div>

      </div>

    </nav>
  </div>


</body>
</html>
