<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href=" {{ asset('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css ') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/Ionicons/css/ionicons.min.css ') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/skins/_all-skins.min.css') }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/morris.js/morris.css ') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/jvectormap/jquery-jvectormap.css ') }}">
    <!-- Date Picker -->
    <link rel="stylesheet"
        href="{{ asset('adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css ') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet"
        href="{{ asset('adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css ') }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href=" {{ asset('adminlte/ plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css ') }}">

    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">



    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-purple-light sidebar-mini">
    <div class="wrapper">

        @include('layouts.header')

        <!-- Left side column. contains the logo and sidebar -->

        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    @yield('title')
                </h1>
                <ol class="breadcrumb">
                    @section('breadcrumb')
                        <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                    @show
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('layouts.footer')
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{ asset('adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('adminlte/bower_components/jquery-ui/jquery-ui.min.js ') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Morris.js charts -->
    <script src="{{ asset('adminlte/bower_components/raphael/raphael.min.js ') }}"></script>
    <script src="{{ asset('adminlte/bower_components/morris.js/morris.min.js ') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <!-- jvectormap -->
    <script src="{{ asset('adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js ') }}"></script>
    <script src="{{ asset('adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js ') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js ') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('adminlte/bower_components/moment/min/moment.min.js ') }}"></script>
    <script src="{{ asset('adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js ') }}"></script>
    <!-- datepicker -->
    <script src="{{ asset('adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js ') }}">
    </script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js ') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset('adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js ') }}"></script>
    <!-- FastClick -->
    <script src="b{{ asset('adminlte/ower_components/fastclick/lib/fastclick.js ') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js ') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('adminlte/dist/js/pages/dashboard.js ') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('adminlte/dist/js/demo.js ') }}"></script>


    <script src="{{ asset('adminlte/bower_components/chart.js/Chart.js ') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('adminlte/dist/js/pages/dashboard2.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>

    <!-- DataTables -->
    <script src="{{ asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js ') }}"></script>
    <script src="{{ asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js ') }}"></script>


    <script src="{{ asset('js/validator.min.js') }}"></script>
    @stack('after-script')
</body>

</html>
