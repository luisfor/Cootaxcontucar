<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@section('title')Copserv @show </title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {!! Html::style('css/bootstrap.min.css') !!}
        {!! Html::style('css/font-awesome.min.css') !!}
        {!! Html::style('css/ionicons.min.css') !!}
        {!! Html::style('css/AdminLTE.min.css') !!}
        {!! Html::style('css/skins/skin-green.min.css') !!}
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-green sidebar-mini">
        <div class="wrapper">
            <!-- Header -->
            @include('layouts.header')

            <!-- Sidebar -->
            @include('layouts.sidebar')

            <!-- wrapper -->
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        {{ $page_title or "Dashboard" }}
                        <small>{{ $page_description or null }}</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    @yield('content')

                </section>
            </div>
            <!-- Footer -->
            @include('layouts.footer')
        </div>
        {!! Html::script('js/jQuery-2.1.4.min.js') !!}
        {!! Html::script('js/bootstrap.min.js') !!}
        {!! Html::script('js/app.min.js') !!}
        @section('scripts')
        @show
    </body>
</html>