<table class="table">
    <thead>
    <th>Documento</th>
    <th>nombre</th>
    <th>direccion</th>
    <th>tipo persona</th>
    <th>Accion</th>
    </thead>
    @forelse($empleados as $empleado)
        <tbody>
        <td>{{$empleado->tipo_doc}}</td>
        <td>{{$empleado->nombre}}</td>
        <td>{{$empleado->direccion}}</td>
        <td>{{$empleado->tipo_persona}}</td>
        <td>
            {!! link_to_route('empleado.edit', $title = 'Editar', $parameters = $empleado->id, $attributes = ['class'=>'btn btn-primary']) !!}
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
{!! $empleados->render() !!}