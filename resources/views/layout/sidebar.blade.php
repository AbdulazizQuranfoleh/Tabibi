<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?php $userInfo = Auth::user(); ?>
    <?php
    use App\Models\User;
    $userCount = User::all();
    ?>

    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <style>
            svg {width: 22px; margin-right: 5px;}
        </style>
        <span class="brand-text font-weight-light p-1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M352.4 243.8l-49.83 99.5c-6.009 12-23.41 11.62-28.92-.625L216.7 216.3l-30.05 71.75L88.55 288l176.4 182.2c12.66 13.07 33.36 13.07 46.03 0l176.4-182.2l-112.1 .0052L352.4 243.8zM495.2 62.86c-54.36-46.98-137.5-38.5-187.5 13.06L288 96.25L268.3 75.92C218.3 24.36 135.2 15.88 80.81 62.86C23.37 112.5 16.84 197.6 60.18 256h105l35.93-86.25c5.508-12.88 23.66-13.12 29.54-.375l58.21 129.4l49.07-98c5.884-11.75 22.78-11.75 28.67 0l27.67 55.25h121.5C559.2 197.6 552.6 112.5 495.2 62.86z"/></svg>
            Tabibi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('dashboard/users') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('dashboard/add-user') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Users</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Doctors -->

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-user-nurse"></i>
                        <p>
                            Doctors
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('dashboard/doctor') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Doctors</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('dashboard/add-doctor') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Doctors</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-calendar-check"></i>
                        <p>
                            Appointments
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('dashboard/appointments') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Appointments</p>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
