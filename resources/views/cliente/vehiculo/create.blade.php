@extends('index')
@section('content')
    @include('alerts.request')
    <div class="row">
        <div class="col-lg-8">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <i class="fa fa-edit text-yellow"></i><h1 class="box-title">Datos del vehiculo</h1>
                </div>
                <div class="box-body">
                    {!! Form::open(['route'=>'vehiculo.store', 'method'=>'POST','class'=>'form-horizontal']) !!}
                    @include('cliente.forms.clienteForm')
                    <div class="col-lg-8 col-lg-offset-2 box-footer">
                        {!! Form::submit('Registrar',['class'=>'btn btn-success btn-block']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
