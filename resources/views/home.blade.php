@extends('layouts.app')

@section('title', 'Libro Actas')

@section('content')
    <div class="bg-light d-flex justify-content-center align-items-center vh-100 container-full">
        <div class="text-center p-5 bg-white rounded shadow container">
            <h1 class="mb-4">Bienvenido</h1>
             <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Iniciar Sesion</a>
        </div>
    </div>
@endsection
