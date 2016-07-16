<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <td><strong><center>Cuenta</center></strong></td>
            <td><strong><center>Detalle</center></strong></td>
            <td><strong><center>Debito +</center></strong></td>
            <td><strong><center>Credito -</center></strong></td>
        </tr>
        <tr>
            <td>{!! Form::number('cod_cliente', 1305, ['class'=>'form-control','readonly' => 'true']) !!}</td>
            <td>{!! Form::text('','CLIENTES', ['class'=>'form-control','readonly' => 'true']) !!}</td>
            <td><div class="input-group">{!! Form::number('debito',null, ['id'=>'debito','class'=>'form-control', 'placeholder'=>'.00']) !!}<span style="width:37px;" class="input-group-addon">+</span></div></td>
            <td></td>
        </tr>
        <tr>
            <td>{!! Form::number('cod_iva', 2408, ['class'=>'form-control','readonly' => 'true']) !!}</td>
            <td>{!! Form::text('','IVA', ['class'=>'form-control', 'placeholder'=>'Ingresa el nombre del empleado.','readonly' => 'true']) !!}</td>
            <td><div class="input-group">{!! Form::number('iva',null, ['id'=>'iva','class'=>'form-control', 'placeholder'=>'16']) !!}<span style="width:37px;" class="input-group-addon">%</span></div></td>
            <td></td>
        </tr>
        <tr>
            <td>{!! Form::text('cod_ingreso','4105', ['class'=>'form-control','readonly' => 'true']) !!}</td>
            <td>{!! Form::text('','INGRESO', ['class'=>'form-control', 'placeholder'=>'Ingresa el nombre del empleado.','readonly' => 'true']) !!}</td>
            <td></td>
            <td><div class="input-group">{!! Form::number('credito',null, ['id'=>'credito','class'=>'form-control', 'placeholder'=>'.00','readonly' => 'true']) !!}<span style="width:37px;" class="input-group-addon">-</span></div></td>
        </tr>
        <tr>
            <td colspan="2"><strong><p id="mj"></p></strong></td>
            <td><p id="dato1"></p></td>
            <td><p id="dato2"></p></td>
        </tr>
    </table>
</div>