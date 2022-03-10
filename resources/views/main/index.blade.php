@extends('templates.main')
@section('content')

{{--    *************************************************     --}}
{{--    *****  resources\views\main\index.blade.php  ****     --}}
{{--    *************************************************     --}}

{{--  start Main Page header --}}
<header class="main__header">
  {{-- <a href="#" class="main__header--logo"><i class="fas fa-utensils"></i></a> --}}
 <div class="main__header--logo-box">
   {{-- <a href="#" class="main__header--logo"><i class="fas fa-utensils"></i></a> --}}
   <a href="#" class="main__header--logo"><img src="{{ asset('assets/images/logo_3.png') }}" width="45px" alt="Logo"> </a>
   <div class="main__header-logo--span"> RegioMahl.de</div>
 </div>
 <div class="main__header--text-box">
  <h1 class="heading-primary">
    <span class="heading-primary--top u-center-text">Mit</span>
    <span class="heading-primary--main">RegioMahl.de</span>
    <span class="text-center heading-primary--sub">zum gutem Essen</span>
  </h1>

  <a href="" class="btn btn--white btn--animated">Treffen Sie Ihre Wahl </a>
 </div>

</header>
<section class="section-about">




</section>



@endsection
