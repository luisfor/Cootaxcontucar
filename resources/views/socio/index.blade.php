@extends('index')
    @section('content')
        @include('alerts.success')
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <i class="fa fa-user text-green"></i><h1 class="box-title">Datos basicos</h1>
                    </div>
                    <div class="box-body">
                        <div class="socios">
                            @include('socio.socios')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('scripts')
        <script>
            $('#pagination a').on('click', function(e){
                e.preventDefault();
                var url = $(this).attr('href');
                $.post(url, $('#search').serialize(), function(data){
                    $('.empleados').html(data);
                });
            });
        </script>
    @stop

