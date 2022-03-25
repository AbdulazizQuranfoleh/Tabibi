<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tabibi - Booking</title>
    <link rel="stylesheet"
        href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css') }}"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <script src="{{ asset('https://kit.fontawesome.com/695389b5b3.js') }}" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('dist/scss/style.css') }}" />
</head>

<body>

  @include('layout.homenav')

    <div class="detailContainer">
        <img src="{{$doctors->img_src}}" alt="">

        <div class="text-left detailsDr">
            <h4>Dr.{{$doctors->name}}</h4>
            <span>{{$doctors->major}}</span>
            <div class="desForDetails">
                <p>
                    {{$doctors->description}}
                </p>
            </div>
            <a href="/book/{{$doctors->id}}">Book your appointment</a>
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
