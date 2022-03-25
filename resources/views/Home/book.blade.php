<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tabibi - appointment with Dr.{{$doctors->name}}</title>
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css') }}"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <script src="{{ asset('https://kit.fontawesome.com/695389b5b3.js') }}" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('dist/scss/style.css') }}" />
</head>

<body>

  @include('layout.homenav')

    <div class="bookingContainer">
        <h3>Book your appointment with Dr.{{$doctors->name}}!</h3>

        <form action="{{ url('appointments/insert') }}" method="POST">
            @csrf
            <div class="row">
                <input type="text" name="name" placeholder="Your name" class="form-control col" required>
                <input type="datetime-local" min="<?php echo date("Y-m-d"); ?>" name="date" max="2022-01-31" placeholder="Select the date" class="form-control col" required>
                <input type="text" name="topic" placeholder="Topic for appointment" class="form-control col" required>
                
                <textarea class="form-control" style="resize: none;" name="description" id="msg" cols="30" rows="10"
                    placeholder="More notes about your condition that the doctor can see"></textarea>

            </div>
            <input type="text" style="display: none" name="with_dr" value="{{$doctors->id}}"  class="form-control" required>

            <button type="submit" class="btn btn-outline-primary mt-3">Submit!</button>
        </form>
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
