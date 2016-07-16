@extends('index')
    @section('content')
        @include('alerts.request')

        {!!Form::model($empleado,['route'=> ['empleado.update',$empleado->id],'method'=>'PUT'])!!}
        //include('empleado.forms.empleadoForm')
        {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
        {!!Form::close()!!}

        {!!Form::open(['route'=> ['empleado.destroy',$empleado->id],'method'=>'DELETE'])!!}
        {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
        {!!Form::close()!!}
    @endsection