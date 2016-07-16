<div class="form-group">
    {!! Form::label('Tipo de documento:',null, ['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-8">
        {!! Form::select('tipo_doc', ['CC' => 'CC Cedula de Ciudadania', 'NIT' => 'NIT Numero de Identificación Tributaria','PT' => 'PT Pasaporte', 'CE' => 'CE Cedula de Extranjeria', 'TE' => 'TE Tarjeta de Extranjeria', 'RC' => 'RC Registro civil', 'TI' => 'TI Tarjeta de identidad'],null, array('class'=>'form-control')) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('Documento:',null, ['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-8">
        {!! Form::text('documento',null, ['class'=>'form-control', 'placeholder'=>'Ingresa una documentacion.']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('Nombre:',null, ['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-8">
        {!! Form::text('nombre',null, ['class'=>'form-control', 'placeholder'=>'Ingresa el nombre del empleado.']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('Apellido(s):',null, ['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-8">
        {!! Form::text('apellidos', null, ['class'=>'form-control', 'placeholder'=>'Opcional']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('Telefono(s):',null, ['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-8">
        {!! Form::text('telefonos',null, ['class'=>'form-control', 'placeholder'=>'Opcional']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('Dirección:',null, ['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-8">
        {!!Form::textarea('direccion',null,['class'=>'form-control', 'placeholder'=>'Ingresa una direccion'])!!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('Tipo de persona:',null, ['class'=>'col-lg-2 control-label']) !!}
    <div class="col-lg-8">
        {!! Form::select('tipo_persona', ['JURIDICA' => 'Juridica', 'NATURAL' => 'Natural'],null, array('class'=>'form-control')) !!}
    </div>
</div>



