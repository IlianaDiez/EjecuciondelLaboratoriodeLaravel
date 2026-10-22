@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>¡Bienvenido(a), {{ Auth::user()->name }}!</h4>
                    <p class="text-muted mb-4">Has iniciado sesión correctamente en el laboratorio de Laravel.</p>

                    <ul class="list-group">
                        <li class="list-group-item"><strong>Correo:</strong> {{ Auth::user()->email }}</li>
                        <li class="list-group-item"><strong>Registrado el:</strong> {{ Auth::user()->created_at->format('d/m/Y H:i') }}</li>
                        <li class="list-group-item"><strong>Universidad:</strong> Universidad Tecnológica de Panamá</li>
                        <li class="list-group-item"><strong>Curso:</strong> Desarrollo Web</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection