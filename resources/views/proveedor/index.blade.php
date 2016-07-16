@extends('index')
@section('content')
    @include('alerts.success')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <i class="fa fa-user text-blue"></i><h1 class="box-title">Datos basicos</h1>
                </div>
                <div class="box-body">
                    <div class="providers">
                        @include('proveedor.proveedores')
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
            var route = '/proveedor';

            $.ajax({
                url: route,
                data: {page: page},
                type: 'GET',
                dataType: 'json',
                success: function(data){
                    $(".providers").html(data);
                }
            });
        });
    </script>
@stop

