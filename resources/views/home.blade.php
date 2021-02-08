@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    <h1>Menú</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Administrador logeado exitosamente</h1>
        </div>

        <div class="card-body">
            <p>Bienvenido Administrador usted se encuentra en el menu principal</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hola')</script>
@stop    


<!-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->
