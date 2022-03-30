@extends('templay')

@section('contents')
    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-12 px-0 text-center">
                <h1 class="display-4 fst-italic">Razas</h1>
            </div>
        </div>
    
        <h4 class="mb-3 text-center">Editar Raza</h4>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-6">
                <form action="{{route('race.update', $races->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name" placeholder="Nombre" required="" value="{{$races->name}}">
                        </div>
                    </div>

                    <hr class="my-4">
    
                    <button type="submit" class="btn btn-primary mb-5">Actualizar</button>
                    <a type="button" class="btn btn-secondary mb-5 float-end" href="{{route('race')}}">Regresar</a>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </main>
@endsection