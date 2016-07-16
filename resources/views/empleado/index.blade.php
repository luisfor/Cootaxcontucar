@extends('index')
    @section('content')
        @include('alerts.success')
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <i class="fa fa-user text-red"></i><h1 class="box-title">Datos basicos</h1>
                    </div>
                    <div class="box-body">
                        <div class="empleados">
                            @include('empleado.empleados')
                        </div>
                    </div>
                </div>
            </div>
       </div>
    @endsection
    @section('scripts')
    @stop
