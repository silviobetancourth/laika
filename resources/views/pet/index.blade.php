@extends('templay')

@section('contents')
    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-12 px-0 text-center">
                <h1 class="display-4 fst-italic">Mascotas</h1>
            </div>
        </div>

        <div class="row mb-1 text-end">
            <h4 class="mb-3"><a type="button" class="btn btn-primary px-4 gap-3" href="{{route('pet.create')}}">Agregar</a></h4>
        </div>
        
        <div class="row mb-2">
            @foreach ($pets as $pet)
                <div class="col-md-4">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-warning">
                        <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">@foreach ($races as $race){{$race->id==$pet->race_id ? $race->name : ''}} @endforeach</strong>
                        <h3 class="mb-0">{{$pet->name}}</h3>
                        <p class="card-text ">peso: {{$pet->weight}} kilos </p>
                        <p class="card-text ">Tamaño: {{$pet->size}}</p>
                        <a href="{{route('pet.edit', $pet->id)}}" class="stretched-link">Editar</a>
                        <form action="{{route('pet.delete', $pet->id)}}" method="POST"> @csrf @method('delete') <button class="btn btn-primary btn-sm px-4 gap-3" type="submit">Eliminar</button> </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection