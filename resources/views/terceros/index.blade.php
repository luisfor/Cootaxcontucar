@extends('index')
    @section('content')
        @include('alerts.success')
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <i class="fa fa-user text-green"></i><h1 class="box-title">Datos basicos</h1>
                    </div>
                    <div class="box-body">
                        <div class="socios">
                            @include('terceros.terceros')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection