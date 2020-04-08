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
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default" style="text-align:center;">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="margin-top:5%;" border="none">
                <h2>LOGIN </h2>
                <div class="panel-body">

                    @if ($error_warning)
                    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ $error_warning }}
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    @endif
                    <form action="{{url('user/login')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="input-username">Username</label>
                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="username"  required placeholder="Username" id="input-username" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-password">Password</label>
                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password"  required placeholder="Password" id="input-password" class="form-control" />
                            </div>

                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-key"></i> Login</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
