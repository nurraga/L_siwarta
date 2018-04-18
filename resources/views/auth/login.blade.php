<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SiWarta | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('assets/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('assets/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('assets/dist/css/AdminLTE.min.css') }}">
    <!-- Material Design -->
    <link rel="stylesheet" href="{{ url('assets/dist/css/bootstrap-material-design.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/dist/css/ripples.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/dist/css/MaterialAdminLTE.min.css') }}">
    <!-- iCheck -->
    <!-- <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css"> -->
    <link rel="stylesheet" href="{{ url('assets/dist/css/skins/all-md-skins.min.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
        a:link {
            color: #b13a32;
        }

        /* visited link */
        a:visited {
            color: #b13a32;
        }
        a:hover {
            color: darkred;
        }

        /* selected link */
        a:active {
            color: deepskyblue;
        }

        #body{
            background-size: cover;
        }

    </style>
</head>
<body class="hold-transition skin-yellow" background="{{ asset('assets/img/siwartabg.jpg') }}" id="body">
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <br><br>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="login-msg col-md-offset-1 col-xs-offset-0">
                    <br>
                    <br>
                    <div class="col-md-2 col-sm-2 col-xs-3">
                        <img width="210px" src="{{ asset('assets/img/siwarta2.png') }}">
                    </div>
                </div>
                <form class="form-horizontal " action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="row">

                        </div>
                    </div>
                    <div class="has-feedback form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <div class="col-md-offset-1 col-md-10">
                            <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus placeholder="Username">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            @if ($errors->has('username'))
                                <span class="help-block">
                             <strong>{{ $errors->first('username') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                    <div class="has-feedback form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-md-10 col-md-offset-1">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="col-xs-6 col-md-7">

                            </div>
                            <div class="col-xs-6 col-md-5">
                                <button type="submit" class="btn btn-danger btn-raised btn-block btn-flat">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                            <br>
                            <br>
                            <br>
                            <br>
                            Registrasi aplikasi SiWarta
                            <a href="{{ route('register') }}" class="text-center">klik disini</a>.
                        </div>
                    </div>
                </form>
                <br>
            </div>
            <!-- /.login-box-body -->
        </div>
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Material Design -->
<script src="{{ asset('assets/dist/js/material.min.js') }}"></script>
<script src="{{ asset('assets/dist/js/ripples.min.js') }}"></script>
<script>
    $.material.init();
</script>
<!-- iCheck -->
<script src="{{ asset('assets/plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>