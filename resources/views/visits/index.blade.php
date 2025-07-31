@extends('layouts.app_user')

@section('title', 'Libro Actas')

@section('content')
<h1>Lista de Visitas</h1>
<div class="d-flex justify-content-between">
    <div class="my-4">
        <a href="{{ route('visits.create') }}" class="btn btn-success">Crear nuevo</a>
    </div>
    <div>
        <form method="GET" action="{{ route('visits.index') }}" class="form-inline mb-3 text-center">
            <label for="orden" class="text-success fw-bold text-center">Ordenar por fecha</label>
            <select name="orden" id="orden" onchange="this.form.submit()" class="form-control ml-2">
                <option value="asc" {{ $orden == 'asc' ? 'selected' : '' }}>Más antiguas primero</option>
                <option value="desc" {{ $orden == 'desc' ? 'selected' : '' }}>Más recientes primero</option>
            </select>
        </form>
    </div>
</div>
@if(isset($visits) && count($visits) > 0)
    <table class="table">
        <thead>
            <tr>
                <th>usuario</th>
                <th>Descripcion</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach($visits as $visit)
            <tr>
                <td>{{ $visit->user->name }}</td>
                <td>{{ $visit->description }}</td>
                <td>{{ $visit->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p> No hay visitas registradas</p>
@endif
@endsection
