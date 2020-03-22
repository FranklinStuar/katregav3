@extends('layouts.app')

@section('title-top')
    Nueva Compra
@endsection

@section('title-body')
    Nueva Compra
@endsection

@section('sidebar-functions')
    sidebar-collapse
@endsection

@section('content')
    <purchase-create></purchase-create>
@endsection

@section('scripts-bottom')
    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        $(()=>{
            $('#cancel').click(()=>{
                console.log('Cancelar')
                swal({
                    title: 'Cancelar Compra',
                    text: '',
                    type: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Continuar',
                    cancelButtonText: 'Seguir comprando',
                    confirmButtonClass: 'btn btn-danger',
                    cancelButtonClass: 'btn btn-default',
                    // buttonsStyling: false
                }).then(function () {
                    swal(
                        'Cancelado',
                        '',
                        "success",
                    )
                })
            })
        })
    </script>
@endsection