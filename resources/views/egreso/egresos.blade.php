<table class="table">
    <thead>
    <th>Codigo</th>
    <th>Tipo egreso</th>
    <th>debito</th>
    <th>credito</th>
    </thead>
    @forelse($egresos as $egreso)
        <tbody>
        <td>{{$egreso->cod_egreso}}</td>
        <td>{{$egreso->tipo_egreso}}</td>
        <td>{{$egreso->debito}}</td>
        <td>{{$egreso->credito}}</td>
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
{!! $egresos->render() !!}