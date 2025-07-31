@extends('layouts.app_user')

@section('content')
     <div class="my-4 ps-4">
        <a href="{{ url()->previous()}}"><i class="fa fa-arrow-left fa-2x"> </i></a>
    </div> 
    
    <h1>Editar Usuario</h1>

    <form action="{{route('users.update', $user->id) }}" method="POST" class="row g-3">
        {!!csrf_field()!!}
        <input type="hidden" name="_method" value="PUT">
        <div class="col-12">
            <label for="inputName" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="inputName" name="name" value="{{$user->name}}">
        </div>
            <div class="col-md-6">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="email" value="{{$user->email}}">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="password" value="{{$user->password}}">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
@endsection