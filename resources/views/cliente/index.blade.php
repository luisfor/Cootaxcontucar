@extends('index')
    @section('content')
        @include('alerts.success')
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <i class="fa fa-user text-yellow"></i><h1 class="box-title">Datos basicos</h1>
                    </div>
                    <div class="box-body">
                        <div class="clientes">
                            @include('cliente.clientes')
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
                var route = '/cliente';

                $.ajax({
                    url: route,
                    data: {page: page},
                    type: 'GET',
                    dataType: 'json',
                    success: function(data){
                        $(".clientes").html(data);
                    }
                });
            });
        </script>
    @stop
