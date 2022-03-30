@extends('templay')

@section('contents')
    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-12 px-0 text-center">
                <h1 class="display-4 fst-italic">Mascotas</h1>
            </div>
        </div>
    
        <h4 class="mb-3 text-center">Editar Mascota</h4>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-6">
                <form action="{{route('pet.update', $pet->id)}}" method="POST">
                    @csrf
                    @method('put')

                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name" placeholder="Nombre" required="" value="{{old('name', $pet->name)}}">
                        </div>
                        @error('name')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="row g-3">
                        <div class="col-6">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" class="form-control" name="color" placeholder="Color" required="" value="{{old('color', $pet->color)}}">
                        </div>
                        @error('color')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror
                        <div class="col-6">
                            <label for="size" class="form-label">Tamaño</label>
                            <input type="text" class="form-control" name="size" placeholder="Tamaño" required="" value="{{old('size', $pet->size)}}">
                        </div>
                        @error('size')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="row g-3">
                        <div class="col-6">
                            <label for="weight" class="form-label">Peso</label>
                            <input type="text" class="form-control" name="weight" placeholder="Pseo" required="" value="{{old('weight', $pet->weight)}}">
                        </div>
                        @error('weight')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror
                        <div class="col-6">
                            <label for="race" class="form-label">Raza</label>
                            <select class="form-select" name="race" required="">
                                <option value="">Seleccione una raza</option>
                                @foreach ($races as $race)
                                    <option value="{{$race->id}}" {{$race->id==old('race', $pet->race_id) ? 'selected' : ''}}>{{$race->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('race')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror
                        
                    </div>

                    <hr class="my-4">
    
                    <button type="submit" class="btn btn-primary mb-5">Actualizar</button>
                    <a type="button" class="btn btn-secondary mb-5 float-end" href="{{route('pet')}}">Regresar</a>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </main>
@endsection