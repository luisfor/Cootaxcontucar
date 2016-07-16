<div class="form-group has-feedback">
    {!! Form::label('Nombre:') !!}
    {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingresa el nombre de usuario.']) !!}
    <span class="glyphicon glyphicon-user form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    {!! Form::label('Correo:') !!}
    {!! Form::email('email',null,['class'=>'form-control', 'placeholder'=>'example@gmail.com']) !!}
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
</div>

<div class="form-group has-feedback">
    {!! Form::label('Contraseña') !!}
    {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Ingresa una contraseña valida.']) !!}
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>

<div class="form-group has-feedback">
    {!! Form::label('Confirmar contraseña') !!}
    {!! Form::password('password2', ['class'=>'form-control', 'placeholder'=>'Ingresa otra vez la contraseña.']) !!}
    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
</div>
