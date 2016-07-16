@extends('index')
@section('content')
    @include('alerts.request')
    <div class="row">
        <div class="col-lg-8">
            <div class="box box-info">
                <div class="box-header with-border">
                    <i class="fa fa-money text-blue"></i><h1 class="box-title">Comprobante de egreso</h1>
                </div>
                <div class="box-body">
                    {!! Form::open(['route'=>'egreso.store', 'method'=>'POST']) !!}
                    <div class="form-group form-horizontal">
                        {!!Form::label('Tercero:',null,['class'=>'control-label'])!!}
                        <div class="">
                            {!!Form::select('cliente_id',$clientes, null, ['class'=>'form-control'])!!}
                        </div>
                    </div>
                    <div class="row">
                    @include('egreso.forms.egresoForm')
                    </div>
                    <div class="form-group form-horizontal">
                        {!! Form::label('Fecha',null, ['class'=>'control-label','style'=>'float:right;']) !!}
                    <div class="col-lg-4 input-group" style="float:right !important;">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        {!! Form::input('date', 'fecha', null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-lg-8 box-footer">
                        {!! Form::submit('Enviar',['class'=>'btn btn-success']) !!} ó
                        {!!link_to('#', $title='Verificar', $attributes = ['id'=>'registro', 'class'=>'btn btn-primary'], $secure = null)!!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('js/egreso.js') !!}
@endsection