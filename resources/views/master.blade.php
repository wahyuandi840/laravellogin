<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')}}" rel="stylesheet">
<!--<link href="{{asset('assets/bower_components/datatables-responsive/css/dataTables.responsive.css')}}" rel="stylesheet">-->
    <link href="{{asset('assets/dist/css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('assets/dist/css/mystyle.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/js/datetimepicker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('assets/js/jquery-2.1.1.min.js')}}"></script>
    <script src="{{asset('assets/js/chart.js')}}"></script>
    <script src="{{asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/dist/js/sb-admin-2.js')}}"></script>

</head>
<body>
<div class="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}" title="Panel Super Admin"><img src="{{asset('assets/images/logo.png')}}" height="30" ></a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown"><a href="{{ url('user/logout') }}"  title="Logout"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li><a href="{{ url('/home') }}" title="Home"> Home</a></li>
                    <li><a href="{{ url('/home/dashboard2') }}" title="Dasboard 2"> Dasboard 2</a></li>

                    <li><a href="{{ url('user/logout') }}" title="Logout"> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <!-- bagian konten blog -->
                @yield('konten')
            </div>
        </div>
    </div>
</div>
</body>
</html>
