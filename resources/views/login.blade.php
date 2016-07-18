@extends('layouts.login')
    @section('content')
        @include('alerts.request')
        {!!Form::open(['route'=>'login.store', 'method'=>'POST'])!!}
            @include('loginForm')

            <hr>
            <div class="checkbox">
                     <label>
                        {!! Form::checkbox('remember', 1, null) !!}
                         Mantenerme contectado
                     </label>
            </div>

             <div class="form-group">
                {!!Form::submit('Iniciar Sesi&oacute;n',['class'=>'btn btn-success bdr'])!!}
                

                {!!link_to('#', $title = '¡Registrar un usuario!', ['class'=>'btn btn-link b'] , $attributes = null, $secure = null)!!}                
            </div>
            {!!Form::close()!!}
    @endsection
    @section('subtitulo')
        Iniciar sesión
    @endsection