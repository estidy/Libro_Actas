@extends('layouts.app')

@section('content')

        <div class="bg-light d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-sm p-4" style="width: 100%; max-width: 400px;">
            <h2 class="text-center mb-4">✅ Registro exitoso</h2>
                <p class="text-center">Tu cuenta ha sido creada correctamente.</p>
                <div class="col-12 text-center">
                    <a href="{{ route('login') }}">
                     <button class="btn btn-primary">Iniciar sesión</button>
                    </a>
                </div>
                
        </div>

@endsection