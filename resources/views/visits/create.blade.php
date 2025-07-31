@extends('layouts.app_user')

@section('content')
    <div class="my-4 ps-4">
        <a href="{{ route('visits.index') }}"><i class="fa-solid fa-arrow-left fa-2x"></i></a>
    </div> 
    <h1> Nueva Visita </h1>

    <form action="{{route('visits.store') }}" method="POST" class="row g-3">
        {!!csrf_field()!!}

        <div class="mb-3">
            <label for="description" class="form-label">Motivo de la visita</label>
            <textarea class="form-control" id="description" name="description" rows="5"></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
@endsection
