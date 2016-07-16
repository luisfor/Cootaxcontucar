<table class="table">
    <thead>
    <th>Codigo</th>
    <th>cuenta</th>
    <th>Accion</th>
    </thead>
    @forelse($cuentas as $cuenta)
        <tbody>
        <td>{{$cuenta->codigo}}</td>
        <td>{{$cuenta->nombre}}</td>
        <td>
            {!! Form::open(['route'=>['cuenta.destroy',$cuenta->id],'method'=>'DELETE']) !!}
            {!! Form::submit('Eliminar',['class'=>'btn btn-danger btn-flat col-xs-3']) !!}
            {!! Form::close() !!}
        </td>
        </tbody>
    @empty
        <div class="alert alert-dismissable alert-warning">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <h4>Mensaje del sistema!</h4>
            <p>No se encuentran registros para este periodo.</p>
        </div>
        <tbody>
        <td>No hay registros para mostrar</td>
        </tbody>
    @endforelse
</table>
{!! $cuentas->render() !!}