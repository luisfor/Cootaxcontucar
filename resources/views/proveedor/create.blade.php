@extends('index')
    @section('content')
        @include('alerts.request')
        <div class="row">
            <div class="col-lg-8">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <i class="fa fa-user text-blue"></i><h1 class="box-title">Datos basicos</h1>
                    </div>
                    <div class="box-body">
                        {!! Form::open(['route'=>'proveedor.store', 'method'=>'POST','class'=>'form-horizontal']) !!}
                        @include('terceros.forms.tercerosForm')
                        <div class="col-lg-8 col-lg-offset-2 box-footer">
                            {!! Form::submit('Registrar',['class'=>'btn btn-success btn-block']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endsection