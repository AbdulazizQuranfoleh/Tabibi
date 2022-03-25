<?php $userInfo = Auth::user(); ?>
<?php
use App\Models\User;
$user = User::all();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tabibi - Doctors</title>
    <link
      rel="stylesheet"
      href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css') }}"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
    <script
      src="{{ asset('https://kit.fontawesome.com/695389b5b3.js') }}"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{ asset('dist/scss/style.css') }}" />
  </head>
  <body>

@include('layout.homenav')

    <style>
      .card .card-text {
        white-space: nowrap; 
  width: 100%; 
  overflow: hidden;
  text-overflow: ellipsis; 
      }
    </style>

          <div class="registerContainer">
            <h3>Discover doctors</h3>
            <div class="doctorsContainer">
                  <div class="container">
                        <div class="row mt-5">
                        @forelse ($doctors as $doctor)
                          @if ($doctor->role_as == "1")
                          <div class="col-lg-3 col-md-6">
                            <a href="/doctorDetail/{{$doctor->id}}">
                                  <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="{{$doctor->img_src}}" alt="Card image cap">
                                        <div class="card-body">
                                          <h5 class="card-title">Dr.{{$doctor->name}}</h5>
                                          <h6 class="card-subtitle">{{$doctor->major}}</h6>
                                          <p class="card-text">{{$doctor->description}}</p>
                                        </div>
                                      </div>
                            </a>
                      </div>
                          @endif
                        @empty
                          <span>No Doctros!</span>
                        @endforelse
                        </div>
                  </div>
            </div>
          </div>

          @include('layout.homefooter')


    <script
      src="{{ asset('https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js') }}"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js') }}"
      integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
