@extends('index')
@section('content')
    @include('alerts.request')
    <div class="row">
        <div class="col-lg-8">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <i class="fa fa-user text-yellow"></i><h1 class="box-title">Datos basicos</h1>
                </div>
                <div class="box-body">
                    {!! Form::model($empleado, ['route'=>['empleado.update',$empleado->id],'method'=>'PUT','class'=>'form-horizontal']) !!}
                    @include('terceros.forms.tercerosForm')
                    @include('empleado.forms.empleadoForm')
                    <div class="col-xs-8 col-lg-offset-2 box-footer btn-group">
                        {!! Form::submit('Actualizar',['class'=>'btn btn-success btn-flat col-xs-3']) !!}
                        {!! Form::close() !!}
                        <span class="col-xs-1"></span>
                        {!! Form::open(['route'=>['empleado.destroy',$empleado->id],'method'=>'DELETE']) !!}
                        {!! Form::submit('Eliminar',['class'=>'btn btn-danger btn-flat col-xs-3']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop