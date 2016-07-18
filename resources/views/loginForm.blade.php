<div class="form-group  has-feedback">
    {!!Form::label('email','Correo electr&oacute;nico:')!!}
    {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu usuario'])!!}
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    {!!Form::label('contrasena','Contrase&ntilde;a:')!!}
    {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
