@extends('templates.main')
@section('content')
<div class="login__body">
  <div class="login__container">
    {{-- Start Login Form  --}}
    <form action=""method="POST" class="login__form login__form--hidden" id="login">
      @csrf
      <h1 class="login__form_title">
        Login
      </h1>
        <div class="login__form_message login__form_message--error">

        </div>
        <div class="login__form_input--group">
          <input type="text" class="login__form_input" autofocus placeholder="Email">
          <div class="login__form_input-error--message">

          </div>
        </div>
        {{-- start Formgroup password --}}
        <div class="login__form_input--group">
          <input type="password" class="login__form_input " autofocus placeholder="Password">
          <div class="login__form_input-error--message"></div>
        </div>
        {{-- start Formgroup password --}}

        {{-- start Submit button --}}
        <button class="login__form_button" type="submit">Continue</button>
        {{-- End Submit Button --}}

        {{-- start Paragraphs --}}
        <p class="login__form_text">
          <a href="" class="login__form_link">Forgot your password?</a>
      </p>
      <p class="login__form_text">
        Don't have an account?
        <a  class="login__form_link" href="#" id="linkCreateAccount"> Create Account</a>
      </p>
         {{-- End Paragraphs --}}
    </form>
     {{-- End  Login Form  --}}

      {{-- Start Create Account Form  --}}
    <form action=""method="POST" class="login__form " id="createAccount">
      @csrf
      <h1 class="login__form_title">
        Create Account
      </h1>
        <div class="login__form_message login__form_message--error">

        </div>
        {{--  Form group Name --}}
        <div class="login__form_input--group">
          <input type="text" class="login__form_input" autofocus placeholder="Full Name">
          <div class="login__form_input-error--message">

          </div>
        </div>
        <div class="login__form_input--group">
          <input type="email" class="login__form_input" autofocus placeholder="Email Address">
          <div class="login__form_input-error--message">

          </div>
        </div>
        {{-- Start Formgroup Password --}}
        <div class="login__form_input--group">
          <input type="password" class="login__form_input " autofocus placeholder="Password">
          <div class="login__form_input-error--message"></div>
        </div>
        {{-- End Formgroup Password --}}
        {{-- Start Formgroup Confirm Password --}}
        <div class="login__form_input--group">
          <input type="password" class="login__form_input " autofocus placeholder="Confirm Password">
          <div class="login__form_input-error--message"></div>
        </div>
        {{-- End Formgroup confirm Password --}}

        {{-- start Submit button --}}
        <button class="login__form_button" type="submit">Continue</button>
        {{-- End Submit Button --}}

        {{-- start Paragraphs --}}

      <p class="login__form_text">
        Already have an account?
        <a  class="login__form_link" href="#" id="linkLogin"> Sign In </a>
      </p>
         {{-- End Paragraphs --}}
    </form>
     {{-- End  Create Account  Form  --}}
  </div>
   {{-- End Login__container  --}}
</div>
  {{-- End Login__main  --}}


<script>
  document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector('#login');
    const createAccountForm = document.querySelector('#createAccount');

    document.querySelector('#linkCreateAccount').addEventListener("click", () => {
      loginForm.classList.add("login__form--hidden");
      createAccountForm.classList.remove("login__form--hidden");
    });

    document.querySelector('#linkLogin').addEventListener("click", () => {
      // console.log('Click event Sign In ')
      loginForm.classList.remove("login__form--hidden");
      createAccountForm.classList.add("login__form--hidden");
    });

  })


</script>

@endsection
