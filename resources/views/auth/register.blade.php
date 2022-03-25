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
    <title>Tabibi - Sign up</title>
</head>

<body>


    @include('layout.homenav')



    <div class="registerContainer">
        <h3>Sign up</h3>
        <div class="regContainer">
            <div class="registerImg">
                <img src="{{ asset('dist/img/home/reglog.svg') }}" alt="">
            </div>
            <div class="registerForm">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror form-control"
                        value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input type="email" name="email" id="email" class="@error('email') is-invalid @enderror form-control"
                        placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input type="text" name="phone" class="@error('phone') is-invalid @enderror form-control" id="phone"
                        placeholder="Phone Number" value="{{ old('phone') }}" minLength="9" maxLength="14" required>


                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input type="password" class="@error('password') is-invalid @enderror form-control" name="password"
                        id="password" placeholder="Password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input type="password" name="password_confirmation" id="password-confirm"
                        placeholder="Confirm Password" required autocomplete="new-password" class="form-control">

                    <button type="submit" id="submitLogin" class="btn btn-outline-primary">Sign up</button>

                    <p>already have an account? <a href="/login">Sign in</a></p>

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
