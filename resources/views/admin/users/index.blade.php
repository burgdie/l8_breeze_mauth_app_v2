{{-- @extends('templates.admin') --}}
{{-- @section('content')
<h1>users index page</h1>
@endsection --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Regiomahl App') }}</title>
     {{--  Font Awesome --}}
     <link
     rel="stylesheet"
     href="https://use.fontawesome.com/releases/v6.0.0/css/all.css"/>
    {{--  Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,600|Montserrat:300,300i,400,400i,500,500i,600,600i,700|Ubuntu:300,300i,400,400i,500,500i,700" rel="stylesheet">
    {{-- Material Design Icon  --}}
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">



    {{-- <link rel="stylesheet" href="css/icon-font.css"> --}}
    {{--  Styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{--  Javascript --}}
    <script src="{{ asset('js/app.js') }} " defer></script>
</head>
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
           <img src="{{ asset('assets/images/admin_1.jpg') }}" alt="Admin Image" class="admin__admin-image">
        </div>
        <div class="admin__card-body">
          <div class="admin__card-title">Dieter Burgstaller</div>
          <p class="admin__card-subtitle">Administrator</p>
        </div>
      </div>
      {{-- Serach form --}}
      <form action="" method="POST" class="admin__search-form">
        @csrf
        <input type="text" class="admin__search-input" placeholder="Search">
        <button type="button" class="admin__search-button">
          {{-- <i class="fas fa-search"></i> --}}
          <span class="material-icons">search</span>
        </button>
      </form>
      {{-- Main Navigation Items --}}
      <ul class="admin__nav-list">

        {{-- Start Main Navigation Item Dashboard --}}
        <li class="admin__nav-item">
          <a href="" class="admin__nav-link">
            {{-- <i class="fas fa-tachometer-alt"></i> --}}
            <span class="material-icons">space_dashboard</span>
            <span class="admin__nav-link-text">Dashboard</span>
            <span
              class="material-icons">
              chevron_right
            </span>
          </a>
        </li>
        {{-- Endt Main Navigation Item Dashboard --}}

        {{-- Start Main Navigation Item Mitarbeiter --}}
        <li class="admin__nav-item">
          <a href="#" class="admin__nav-link">
            <span class="material-icons">
              people_alt
            </span>
            <span class="admin__nav-link-text">Mitarbeiter</span>
            {{-- <i class="fas fa-angle-right"></i> --}}
            <span
              class="material-icons">
              chevron_right
            </span>
          </a>
          {{-- Start Sub Navigation List --}}
          <ul class="admin__sub-nav-list">
            {{-- Start Sub Navigation Item  --}}
            <li class="admin__sub-nav-item">
              <a href="#" class="admin__sub-nav-link">
                {{-- <i class="far fa-circle"></i> --}}
                <span
                  class="material-icons">
                  groups
                </span>
                <span> Mitarbeiter Liste</span>
              </a>
            </li>
            {{-- End Sub Navigation Item  --}}

            {{-- Start Sub Navigation Item  --}}
            <li class="admin__sub-nav-item">
              <a href="#" class="admin__sub-nav-link">
                {{-- <i class="far fa-circle"></i> --}}
                <span class=" material-icons">
                  person_add
                </span>
                <span> Mitarbeiter hinzufügen</span>
              </a>
            </li>
             {{-- End Sub Navigation Item  --}}
          </ul>
          {{-- End Sub navigation List  --}}
        </li>
        {{-- End Main Navigation Item Mitarbeiter --}}

        {{-- Start Main Navigation Item Speisen--}}
        <li class="admin__nav-item">
          <a href="#" class="admin__nav-link">
           <span class="material-icons">
              restaurant_menu
           </span>
            <span class="admin__nav-link-text">
              Speisen
            </span>
            <span
              class="material-icons">
              chevron_right
            </span>
          </a>
          <ul class="admin__sub-nav-list">
            <li class="sub-nav-item">
                <a href="#" class="admin__sub-nav-link">
                  {{-- <i class="far fa-circle"></i> --}}
                  <span class="material-icons">
                    lunch_dining
                  </span>
                  <span> Mittagstisch</span>
                </a>
              </li>
            <li class="admin__sub-nav-item">
                <a href="#" class="admin__sub-nav-link">
                  {{-- <i class="far fa-circle"></i> --}}
                  <span class="material-icons">
                    menu_book
                   </span>
                  <span>Speisekarte</span>
                </a>
              </li>


          </ul>
        </li>
        {{-- End Main Navigation Item Speisen --}}

        {{-- Start Main Navigation Item Filialen  --}}
        <li class="admin__nav-item">
          <a href="#" class="admin__nav-link">
           <span class="material-icons">
              food_bank
           </span>
            <span class="admin__nav-link-text">
              Filialen
            </span>
            <span
              class="material-icons">
              chevron_right
            </span>
          </a>
          <ul class="admin__sub-nav-list">
            <li class="admin__sub-nav-item">
                <a href="#" class="admin__sub-nav-link">
                  {{-- <i class="far fa-circle"></i> --}}
                  <span class="material-icons">
                    store
                  </span>
                  <span>Filial_liste</span>
                </a>
              </li>
            <li class="admin__sub-nav-item">
                <a href="#" class="admin__sub-nav-link">
                  {{-- <i class="far fa-circle"></i> --}}
                  <span class="material-icons">
                    add_business
                   </span>
                  <span>Filiale hinufügen</span>
                </a>
              </li>


          </ul>
        </li>
        {{-- End Main Navigation Item Speisen --}}

        {{-- Start Main Navigation Item Logo/Potriats --}}
        <li class="admin__nav-item">
          <a href="#" class="admin__nav-link">
           <span class="material-icons">
              portrait
           </span>
            <span class="admin__nav-link-text">
              Logo/Portraits
            </span>
            <span
              class="material-icons">
              chevron_right
            </span>
          </a>
          <ul class="admin__sub-nav-list">
            <li class="admin__sub-nav-item">
              <a href="#" class="admin__sub-nav-link">
                {{-- <i class="far fa-circle"></i> --}}
                <span class="material-icons">
                  photo_camera
                </span>
                <span>Logo/Portrait Liste</span>
              </a>
            </li>
            <li class="admin__sub-nav-item">
              <a href="#" class="admin__sub-nav-link">
                {{-- <i class="far fa-circle"></i> --}}
                <span class="material-icons">
                  add_a_photo
                </span>
                <span>Logo/Portrait hinzufügen</span>
              </a>
            </li>
          </ul>
        </li>
        {{-- End Main Navigation Item  Logo/Portraits --}}
        {{-- Start Main Navigation Item Logo/Potriats --}}
        <li class="admin__nav-item">
          <a href="#" class="admin__nav-link">
           <span class="material-icons">
              portrait
           </span>
            <span class="admin__nav-link-text">
              Gallery
            </span>
            <span
              class="material-icons">
              chevron_right
            </span>
          </a>
          <ul class="admin__sub-nav-list">
            <li class="admin__sub-nav-item">
              <a href="#" class="admin__sub-nav-link">
                {{-- <i class="far fa-circle"></i> --}}
                <span class="material-icons">
                  photo_library
                </span>
                <span>Bilder Liste</span>
              </a>
            </li>
            <li class="admin__sub-nav-item">
              <a href="#" class="admin__sub-nav-link">
                {{-- <i class="far fa-circle"></i> --}}
                <span class="material-icons">
                  add_a_photo
                </span>
                <span>Bild hinzufügen</span>
              </a>
            </li>
          </ul>
        </li>
        {{-- End Main Navigation Item  Logo/Portraits --}}
      </ul>
      <ul class="admin__bottom-list">
        <li class="admin__bottom-list-item">
          <a href=" " class="admin__bottom-list-link">
            <span class="material-icons">
              logout
            </span>
            <span class="admin__bottom-list-link--text">Logout</span>

          </a>


        </li>


      </ul>





    </nav>
    <section class="admin__main-section">
        <header class="admin__header">
          <h1 class="admin__heading">Dashboard</h1>
        </header>
      </section>
  </div>






</body>
</html>

