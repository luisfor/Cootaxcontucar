<div class="form-group">
    {!! Form::label('Cargo:',null, ['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-8">
        {!! Form::text('cargo', null, ['class'=>'form-control', 'placeholder'=>'Ingresa un cargo.']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('Sueldo:',null, ['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-8 input-group">
        <span class="input-group-addon">$</span>
        {!! Form::number('sueldo',null, ['class'=>'form-control', 'placeholder'=>'700.000']) !!}
        <span class="input-group-addon">.00</span>
    </div>
</div>
<div class="form-group">
    {!! Form::label('E.P.S:',null, ['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-8 input-group">
        {!! Form::text('eps',null, ['class'=>'form-control', 'placeholder'=>'Ingresa una eps.']) !!}
        <a class="input-group-addon btn bg-blue" data-toggle="tooltip" data-placement="left" title="Consulta una E.P.S" href="#"><i class="glyphicon glyphicon-search"></i></a>
    </div>
</div>
<div class="form-group">
    {!! Form::label('Fondo:',null, ['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-8 input-group">
        {!! Form::text('fondo',null, ['class'=>'form-control', 'placeholder'=>'Ingresa un fondo de pension.']) !!}
        <a class="input-group-addon btn bg-blue" data-toggle="tooltip" data-placement="left" title="Consulta un fondo de pension" href="#"><i class="glyphicon glyphicon-search"></i></a>
    </div>
</div>
<div class="form-group">
    {!! Form::label('A.R.P:',null, ['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-8 input-group">
        {!! Form::text('arp',null, ['class'=>'form-control', 'placeholder'=>'Ingresa un arp.']) !!}
        <a class="input-group-addon btn bg-blue" data-toggle="tooltip" data-placement="left" title="Consulta una A.R.P" href="#"><i class="glyphicon glyphicon-search"></i></a>
    </div>
</div>
<div class="form-group">
    {!! Form::label('C.C:',null, ['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-8 input-group">
        {!! Form::text('cc',null, ['class'=>'form-control', 'placeholder'=>'Ingresa el numero de cedula ciudadana.']) !!}
        <a class="input-group-addon btn bg-blue" data-toggle="tooltip" data-placement="left" title="Consulta caja compensacion" href="#"><i class="glyphicon glyphicon-search"></i></a>
    </div>
</div>
<div class="form-group">
    {!! Form::label('Tipo de contrato:',null, ['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-8">
        {!! Form::text('tipo_contrato',null, ['class'=>'form-control', 'placeholder'=>'Ingresa de contrato.']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('Fecha inicio:',null, ['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-8 input-group">
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
        {!! Form::input('date', 'fecha_inicio', null, ['class' => 'form-control', 'placeholder' => 'Date', 'id'=>'reservation']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('Fecha final:',null, ['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-8 input-group">
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
        {!! Form::input('date', 'fecha_final', null, ['class' => 'form-control', 'placeholder' => 'Date','id'=>'reservation']) !!}
    </div>
</div>
