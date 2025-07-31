@extends('layouts.app_user')

@section('content')
    <div class="my-4 ps-4">
        <a href="{{ route('users.index') }}"><i class="fa-solid fa-arrow-left fa-2x"></i></a>
    </div> 
    <div class="card">
        <h5 class="card-header text-center">{{$user->name}}</h5>
        <div class="card-body text-center">
            <p class="card-text">{{$user->email}}</p>
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                {!!csrf_field()!!} 
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
            </form>
        </div>
    </div>
@endsection