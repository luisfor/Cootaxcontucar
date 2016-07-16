<table class="table">
    <thead>
    <th>Documento</th>
    <th>nombre</th>
    <th>direccion</th>
    <th>tipo persona</th>
    <th>Accion</th>
    </thead>
    @forelse($providers as $provider)
        <tbody>
        <td>{{$provider->tipo_doc}}</td>
        <td>{{$provider->nombre}}</td>
        <td>{{$provider->direccion}}</td>
        <td>{{$provider->tipo_persona}}</td>
        <td>
            {!! link_to_route('proveedor.edit', $title = 'Editar', $parameters = $provider->id, $attributes = ['class'=>'btn btn-primary']) !!}
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
{!! $providers->render() !!}