@extends('layouts.login')
    @section('content')
        @include('alerts.request')
        {!!Form::open(['route'=>'login.store', 'method'=>'POST'])!!}
            @include('loginForm')
            <div class="row">
                <div class="col-xs-4">
                    {!!Form::submit('Iniciar',['class'=>'btn btn-success btn-block btn-flat bdr'])!!}
                </div>
                {!!Form::close()!!}
                <div class="col-xs-8">
                    {!!link_to('#', $title = 'Olvidaste tu contraseña?',['class'=>'b'], $attributes = null, $secure = null)!!}
                </div>
            </div>
    @endsection
    @section('subtitulo')
        Iniciar sesión
    @endsection