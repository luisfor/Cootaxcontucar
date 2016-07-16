<table class="table">
    <thead>
    <th>Documento</th>
    <th>nombre</th>
    <th>direccion</th>
    <th>tipo persona</th>
    <th>Placa Vehiculo</th>
    <th>Accion</th>
    </thead>
    @forelse($clientes as $cliente)
        <tbody>
        <td>{{$cliente->tipo_doc}}</td>
        <td>{{$cliente->nombre}}</td>
        <td>{{$cliente->direccion}}</td>
        <td>{{$cliente->tipo_persona}}</td>
        <td>{{$cliente->placa}}</td>
        <td>
            {!! link_to_route('cliente.edit', $title = 'Editar', $parameters = $cliente->id, $attributes = ['class'=>'btn btn-primary']) !!}
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
{!! $clientes->render() !!}