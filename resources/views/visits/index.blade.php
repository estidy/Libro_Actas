@extends('layouts.app_user')

@section('title', 'Libro Actas')

@section('content')
<h1>Lista de Visitas</h1>
<div class="my-4">
    <a href="{{ route('visits.create') }}" class="btn btn-success">Crear nuevo</a>
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