@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="bg-light d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-sm p-4" style="width: 100%; max-width: 400px;">
            <h2 class="text-center mb-4">Iniciar Sesión</h2>
            <form action="{{route('login') }}" method="POST" class="row g-3">
                {!!csrf_field()!!}
                    <div class="col-md-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" >
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" name="password">
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </div>
            </form>

            <div class="text-center mt-3">
                <a href="{{ route('register') }}" class="btn btn-link">¿No tenés cuenta? Registrate</a>
            </div>
        </div>
    </div>
@endsection