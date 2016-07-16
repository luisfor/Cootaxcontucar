@extends('index')
@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <i class="fa fa-user text-green"></i><h1 class="box-title">Lista de cuentas</h1>
                </div>
                <div class="box-body">
                    <div class="cuentas">
                        @include('config.cuenta.cuentas')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).on('click','.pagination a', function(e){
            e.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            var route = '/cuenta';

            $.ajax({
                url: route,
                data: {page: page},
                type: 'GET',
                dataType: 'json',
                success: function(data){
                    $(".cuentas").html(data);
                }
            });
        });

    </script>
@stop

