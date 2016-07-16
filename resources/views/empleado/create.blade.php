@extends('index')
    @section('content')
        @include('alerts.request')
        <div class="row">
            <div class="col-lg-8    ">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <i class="fa fa-user text-red"></i><h1 class="box-title">Datos basicos</h1>
                    </div>
                    <div class="box-body">
                        {!! Form::open(['route'=>'empleado.store', 'method'=>'POST','class'=>'form-horizontal']) !!}
                            @include('terceros.forms.tercerosForm')
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <i class="fa fa-edit text-red"></i><h1 class="box-title">Datos empleado</h1>
                    </div>
                    <div class="box-body form-horizontal">
                        @include('empleado.forms.empleadoForm')
                        <div class="col-lg-8 col-lg-offset-2 box-footer">
                            {!! Form::submit('Registrar',['class'=>'btn btn-success btn-block']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('scripts')
        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });
        </script>
    @stop
