<table class="table">
    <thead>
    <th>Placa</th>
    <th>Chasis</th>
    <th>Marca</th>
    <th>cilindraje</th>
    <th>tipo</th>
    <th>modelo</th>
    <th>Accion</th>
    </thead>
    @forelse($vehiculos as $vehiculo)
        <tbody>
        <td>{{$vehiculo->placa}}</td>
        <td>{{$vehiculo->num_chasis}}</td>
        <td>{{$vehiculo->marca}}</td>
        <td>{{$vehiculo->cilindraje}}</td>
        <td>{{$vehiculo->tipo_vehiculo}}</td>
        <td>{{$vehiculo->modelo}}</td>
        <td>
            {!! link_to_route('vehiculo.edit', $title = 'Editar', $parameters = $vehiculo->id, $attributes = ['class'=>'btn btn-primary']) !!}
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
{!! $vehiculos->render() !!}