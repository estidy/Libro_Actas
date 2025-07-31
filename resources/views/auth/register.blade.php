@extends('layouts.app')

@section('title', 'Registro')

@section('content')
<h2>Registro de Usuario</h2>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color:red;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('register') }}" class="row g-3">
    {!!csrf_field()!!}

    <div class="col-6">
            <label for="inputName" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="inputName" name="name" placeholder="Juana Diaz">
    </div>
    <div class="col-md-6">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="email" required >
    </div>
    <div class="col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password4" name="password" required>
    </div>
        <div class="col-md-6">
            <label for="password_confirmation" class="form-label">Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
    </div>

    <div class="col-12 text-center mt-3">
            <button type="submit" class="btn btn-primary">Registrarse</button>
    </div>

    <div class="text-center mt-3">
        <a href="{{ route('login') }}">¿Ya tenés cuenta? Iniciá sesión</a>
    </div>
</form>
@endsection