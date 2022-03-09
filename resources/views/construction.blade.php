<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In Form</title>
    <!-- Link to Fontawesome for icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!--  Link to Google Font quicksan  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <!--  Own styles  -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
  </head>
  <body>
    <div class="container">
      <div class="form-wrapper">
        <div class="banner">
          <p class="">Restricted Access to Test Page</p>

        </div>
        <div class="green-bg">
          <button type="button">Go to Login</button>
        </div>
        <form action="{{ route('access') }}"  method="POST" class="signup-form">
          @csrf
          <h1>Access for restricted Page</h1>

          <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" />
          </div>
          <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" />
          </div>
          <button type="submit">Login</button>
        </form>
      </div>
    </div>


    {{--   JavaScript --}}

    <script src="{{ asset('js/app.js') }} "></script>
    <script>
      const container = document.querySelector(".container");
      const signUpBtn = document.querySelector(".green-bg button");

      signUpBtn.addEventListener("click", () => {

        container.classList.toggle("change");
      });
    </script>
  </body>
</html>

