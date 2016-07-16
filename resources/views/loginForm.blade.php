<div class="form-group  has-feedback">
    {!!Form::label('email','username:')!!}
    {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu usuario'])!!}
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    {!!Form::label('contrasena','password:')!!}
    {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
