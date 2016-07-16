<table class="table">
    <thead>
        <th>Documento</th>
        <th>terceros</th>
        <th>nombre</th>
        <th>direccion</th>
        <th>tipo persona</th>
        <th>Accion</th>
    </thead>
    @forelse($terceros as $tercero)
    <tbody>
        <td>{{$tercero->tipo_doc}}</td>
        <td>{{$tercero->nombre}}</td>
        <td>{{$tercero->direccion}}</td>
        <td>{{$tercero->tipo_persona}}</td>
        <td>{{$tercero->tipo_tercero}}</td>
        <td>
            {!! link_to_route('terceros.edit', $title = 'Editar', $parameters = $tercero->id, $attributes = ['class'=>'btn btn-primary']) !!}
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
<!--!! $terceros->render() !!}-->