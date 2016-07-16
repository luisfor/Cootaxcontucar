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
                        {!! Form::open(['route'=>'cliente.store', 'method'=>'POST','class'=>'form-horizontal']) !!}
                        @include('terceros.forms.tercerosForm')
                        <div class="form-group">
                            {!!Form::label('Vehiculo:',null,['class'=>'col-lg-2 control-label'])!!}
                            <div class="col-lg-8">
                            {!!Form::select('vehiculo_id',$vehiculos, null, ['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="col-lg-8 col-lg-offset-2 box-footer">
                            {!! Form::submit('Registrar',['class'=>'btn btn-success btn-block']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    @endsection
