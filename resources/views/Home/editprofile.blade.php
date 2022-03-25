<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tabibi - My Profile</title>
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css') }}"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <script src="{{ asset('https://kit.fontawesome.com/695389b5b3.js') }}" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('dist/scss/style.css') }}" />
</head>

<body>
  @include('layout.homenav')

    <div class="profileContainer">
        <div class="heading d-inline-block">
            <h3 class="d-inline-block">Edit Profile</h3>
        </div>
        <aside>
    <?php $userInfo = Auth::user(); ?>

            <ul>
                <li><a href="/editprofile/<?php echo $userInfo->id ?>">Edit Profile</a></li>
                <li><a href="/profile">Appointments</a></li>
            </ul>
        </aside>
        <div class="profileCon">
            <form action="{{ url('/editprofile/update/' . $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{$user->name}}" id="name" required class="form-control">
                <label for="email">Email:</label>
                <input type="email" id="email" value="{{$user->email}}" disabled name="email" required class="form-control" >
                <label for="phone">Phone:</label>
                <input type="phone" id="phone" value="{{$user->phone}}" name="phone" required class="form-control">
                <label for="password">Password:</label>
                <input type="password" id="password" value="{{$user->password}}" name="password" required class="form-control">

                <button type="submit" class="mt-3 btn btn-outline-primary">Submit</button>
            </form>
        </div>
    </div>

    @include('layout.homefooter')

    <script src="{{ asset('https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js') }}"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</body>

</html>
