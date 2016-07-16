<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cootaxcontucar | Log in</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        {!! Html::style('css/bootstrap.min.css') !!}
        {!! Html::style('css/AdminLTE.min.css') !!}
        {!! Html::style('css/font-awesome.min.css') !!}
        {!! Html::style('css/template/green.css') !!}
        <link rel="shortcut icon" href="{{ asset('img/Twinpines.svg') }}">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>Cootaxcontucar</b></a>
            </div>
            <div class="login-box-body">
                <div style="display:block; width:100%;margin: 0 auto;text-align: center;">
                    <h3 class="login-box-msg">@section('subtitulo') @show</h3>
                    <img align=center  id="svg" class="svg logo" style="max-width: 100%;" src="{{ asset('img/logo.svg') }}" alt="">
                </div>
                @yield('content')
            </div>
        </div>
        {!!Html::script('js/jQuery-2.1.4.min.js')!!}
        {!!Html::script('js/bootstrap.min.js')!!}
        {!!Html::script('js/icheck.min.js')!!}
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>
