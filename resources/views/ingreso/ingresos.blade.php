<table class="table">
    <thead>
    <th>Debito</th>
    <th>Credito</th>
    <th>iva</th>
    </thead>
    @forelse($ingresos as $ingreso)
        <tbody>
        <td>{{$ingreso->debito}}</td>
        <td>{{$ingreso->credito}}</td>
        <td>{{$ingreso->iva}}</td>
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
{!! $ingresos->render() !!}