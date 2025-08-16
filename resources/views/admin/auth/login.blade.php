
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MeSex TV | Đăng Nhập</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{ url('/') }}/system/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ url('/') }}/system/bower_components/font-awesome/css/font-awesome.min.css">

        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ url('/') }}/system/bower_components/Ionicons/css/ionicons.min.css">

        <!-- Theme style -->
        <link rel="stylesheet" href="{{ url('/') }}/system/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ url('/') }}/system/plugins/iCheck/square/blue.css">

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo"><a href="{{route('admin.login')}}"><b>MeSex TV</b></a></div>

            <div class="login-box-body">
                <p class="login-box-msg">Login</p>

                <form action="{{ route('admin.post.login') }}" method="post">
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email" @error('email') is-invalid @enderror" name="email" value="super@gmail.com" required autocomplete="email" autofocus>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" value="password" class="form-control" placeholder="Password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
        <!-- jQuery 3 -->
        <script src="{{ url('/') }}/system/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{ url('/') }}/system/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="{{ url('/') }}/system/plugins/iCheck/icheck.min.js"></script>
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
