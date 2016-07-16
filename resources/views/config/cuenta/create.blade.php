@extends('index')
    @section('content')
        @include('config.alerts.alert')
        <div class="row">
            <div class="col-lg-8">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <i class="fa fa-user text-green"></i><h1 class="box-title">Registrar nueva cuenta</h1>
                    </div>
                    <div class="box-body">
                        {!! Form::open(['class'=>'form-horizontal']) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                        <div class="form-group">
                            {!! Form::label('Codigo de cuenta:',null, ['class'=>'col-lg-4 control-label']) !!}
                            <div class="col-lg-6">
                                {!! Form::text('codigo', null, ['id'=>'codigo','class'=>'form-control', 'placeholder'=>'Ingresa un codigo de cuenta']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('Nombre de cuenta:',null, ['class'=>'col-lg-4 control-label']) !!}
                            <div class="col-lg-6">
                                {!! Form::text('nombre',null, ['id'=>'nombre','class'=>'form-control', 'placeholder'=>'Ingresa un nombre de cuenta.']) !!}
                            </div>
                        </div>
                        <div class="col-lg-8 col-lg-offset-2 box-footer">
                            {!!link_to('#', $title='Registrar', $attributes = ['id'=>'registro', 'class'=>'btn btn-primary'], $secure = null)!!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('scripts')
        <script>
            $("#registro").click(function(){
                var codigo = $("#codigo").val();
                var nombre = $("#nombre").val();
                var route = "/cuenta";
                var token = $("#token").val();

                $.ajax({
                    url: route,
                    headers: {'X-CSRF-TOKEN': token},
                    type: 'POST',
                    dataType: 'json',
                    data:{codigo: codigo, nombre: nombre},

                    success:function(){
                        $("#codigo").val("");
                        $("#nombre").val("");
                        $("#msj-success").fadeIn();
                    },
                    error:function(msj){
                        $("#msj").html('Completa los campos correctamente!');
                        $("#msj-error").fadeIn();
                    }
                });

                $("#codigo").val("");
                $("#nombre").val("");
            });
        </script>
    @endsection