@extends('layouts.app_user')

@section('title', 'Usuarios')

@section('content')
<h1>Lista de Usuarios</h1>
<div class="my-4">
    <a href="{{ route('users.create') }}" class="btn btn-success">Crear nuevo</a>
</div>
@if(isset($users) && count($users) > 0)
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td class="pe-4">
                    <a href="{{ route('users.show', $user->id) }}"><i class="fa-solid fa-eye"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p> No hay usuarios aun</p>
@endif
@endsection