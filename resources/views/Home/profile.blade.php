<!DOCTYPE html>
<html lang="en">
<?php
use App\Models\User;
$userCount = User::all();
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tabibi - My Profile</title>
    <link rel="stylesheet"
        href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css') }}"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <script src="{{ asset('https://kit.fontawesome.com/695389b5b3.js') }}" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('dist/scss/style.css') }}" />
</head>

<body>
    @include('layout.homenav')

    <div class="profileContainer">
        <div class="heading d-inline-block">
            <h3 class="d-inline-block">Appointments</h3>
        </div>
        <aside>
            <?php $userInfo = Auth::user(); ?>

            <ul>
                <li><a href="/editprofile/<?php echo $userInfo->id; ?>">Edit Profile</a></li>
                <li><a href="/profile">Appointments</a></li>
            </ul>
        </aside>
        <style>
            .appointmenttDes {
                width: 180px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                display: inline-block !important;
                margin: 0 !important;
            }
            .appointmenttDes:hover {
                transition: all .5s ease-in !important;
                width: 180px;
                height: 100px;
                cursor: pointer;
                white-space: pre-wrap;
                overflow: unset;
                text-align: left !important;
                text-overflow: clip;
                display: inline-block !important;
                margin: 0 !important;
            }

        </style>
        <div class="profileCon">
            <table>
                <tr>
                    <th>Doctor's name</th>
                    <th>Topic</th>
                    <th>Description</th>
                    <th>Appointment Date</th>
                    <th>Created At</th>
                    <th>Confirmed Status</th>
                </tr>
                @forelse ($appointment as $appointmentt )
                    @if ($appointmentt->user_id === Auth::user()->id)
                        <tr>
                            <td>
                                <?php $drname = User::find($appointmentt->with_dr)->name;
                                echo "<span class='text-primary'>{$drname}</span>"; ?>
                            </td>
                            <td>{{ $appointmentt->topic }}</td>
                            <td><p  class="appointmenttDes text-center">{{ $appointmentt->description }}</p></td>
                            <td>{{ $appointmentt->date }}</td>
                            <td>{{ $appointmentt->created_at }}</td>
                            <td>
                                @if ($appointmentt->confirmed == 0)
                                    <span class="text-danger">in Progress</span>
                                @else
                                    <span class="text-success">Confirmed</span>
                                @endif
                            </td>
                        </tr>
                            
                    @endif 
                @empty
                    <span>You dont have any appointment</span>
                @endforelse

            </table>
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
