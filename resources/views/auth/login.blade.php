<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('https://use.fontawesome.com/releases/v5.15.4/css/all.css') }}"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css') }}"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('dist/scss/style.css') }}" />
    <title>Tabibi - Sign in</title>
</head>

<body>


    @include('layout.homenav')
    
    <div class="registerContainer">
        <h3>Sign in</h3>
        <div class="regContainer">
              <div class="registerImg">
                    <img src="{{ asset('dist/img/home/reglog.svg') }}" alt="">
              </div>
              <div class="registerForm">
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                          name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email"
                          autofocus>
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                          name="password" placeholder="Password" required autocomplete="current-password">
                          @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <div class="containerPasswords">
                        <div class="forgotPassword">

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    <label>Forgot password?</label>
                                </a>
                            @endif
                        </div>
                    </div>
                          <button type="submit" id="submitLogin" class="btn btn-outline-primary">Sign in</button>
                          <p>Don't have an account yet? <a href="/register">Sign up</a></p>
                        </form>
                    </div>
                </div>
            </div>
            
            @include('layout.homefooter')







    <script src="{{ asset('https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js') }}"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js') }}"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js') }}"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
</body>

</html>
