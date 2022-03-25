<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tabibi - Edit User</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css" />
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('layout.navbar')
        <!-- /.navbar -->

        @include('layout.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Edit Users - Tabibi</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dsahboard/">Home</a></li>
                                <li class="breadcrumb-item"><a href="/dashboard/users">Users</a></li>
                                <li class="breadcrumb-item active">Edit Users</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">


                            <section class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card card-primary">
                                                <div class="card-header">
                                                    <h3 class="card-title">Edit User Information</h3>
                                                </div>
                                                <form form action="{{ url('update-user/' . $user->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Full Name:</label>
                                                            <input type="text" name="name" class="form-control"
                                                                id="name"
                                                                value="{{ $user->name }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Email address:</label>
                                                            <input type="email" name="email" class="form-control"
                                                                id="email" value="{{ $user->email }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="password">Password:</label>
                                                            <input type="password" name="password"
                                                                class="form-control" id="password"
                                                                value="{{ $user->password }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Phone Number:</label>
                                                            <input type="tel" name="phone" class="form-control"
                                                                id="exampleInputEmail1" value="{{ $user->phone }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="role">Roles:</label>
                                                            <select name="role_as" id="role" class="form-control">
                                                                <option value="{{ $user->role_as }}" selected
                                                                    disabled>
                                                                    Role:

                                                                    <?php
                                                                    if ($user->role_as == 0) {
                                                                        echo '<span>User</span>';
                                                                    } elseif ($user->role_as == 1) {
                                                                        echo '<span>Doctor</span>';
                                                                    } elseif ($user->role_as == 2) {
                                                                        echo '<span>Admin</span>';
                                                                    }
                                                                    ?>
                                                                </option>
                                                                <option value="0">User</option>
                                                                <option value="1">Doctor
                                                                </option>
                                                                <option value="2">Admin
                                                                </option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" id="submit" class="btn btn-primary">Edit
                                                            User</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->
 

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1")
                .DataTable({
                    responsive: true,
                    lengthChange: false,
                    autoWidth: false,
                    buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                })
                .buttons()
                .container()
                .appendTo("#example1_wrapper .col-md-6:eq(0)");
            $("#example2").DataTable({
                paging: true,
                lengthChange: false,
                searching: false,
                ordering: true,
                info: true,
                autoWidth: false,
                responsive: true,
            });
        });
    </script>
</body>

</html>
