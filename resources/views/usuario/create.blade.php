@extends('layouts.login')
    @section('content')
        @include('alerts.request')
        @include('alerts.errors')
        {!! Form::open(['route'=>'configurar.store', 'method'=>'POST']) !!}
            @include('usuario.forms.userForm')
            {!! Form::submit('Registrar',['class'=>'btn btn-success btn-block btn-flat bdr']) !!}
        {!! Form::close() !!}
    @endsection
    @section('subtitulo')
        Registrar Administrador
    @endsection