@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Admin</h1>
@stop
@section('template_title')
    {{ __('Create') }} Producto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Agregar') }} producto</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('productos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('productos.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
