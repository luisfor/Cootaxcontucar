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
            <td>{!! Form::number('cod_egreso',null, ['id'=>'cod_egreso','class'=>'form-control','readonly' => 'true']) !!}</td>
            <td>{!! Form::select('tipo_egreso',array(''=>'','1110' => 'BANCO', '1105' => 'EFECTIVO'),null, ['id'=>'tipo_egreso','class'=>'form-control']) !!}</td>
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