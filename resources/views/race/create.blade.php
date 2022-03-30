@extends('templay')

@section('contents')
    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-12 px-0 text-center">
                <h1 class="display-4 fst-italic">Razas</h1>
            </div>
        </div>
    
        <h4 class="mb-3 text-center">Crear Razas</h4>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-6">
                <form action="{{route('race.store')}}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name" placeholder="Nombre" required="">
                        </div>
                    </div>

                    <hr class="my-4">
    
                    <button class="w-100 btn btn-primary mb-5" type="submit">Guardar</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </main>
@endsection