@extends('templay')

@section('contents')
    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-12 px-0 text-center">
                <h1 class="display-4 fst-italic">Mascotas</h1>
            </div>
        </div>
    
        <h4 class="mb-3 text-center">Crear Mascotas</h4>
        
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-6">
                <form action="{{route('pet.store')}}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name" placeholder="Nombre" required="" value="{{old('name')}}">
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
                            <input type="text" class="form-control" name="color" placeholder="Color" required="" value="{{old('color')}}">
                        </div>
                        @error('color')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror
                        <div class="col-6">
                            <label for="size" class="form-label">Tamaño</label>
                            <input type="text" class="form-control" name="size" placeholder="Tamaño" required="" value="{{old('size')}}">
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
                            <input type="text" class="form-control" name="weight" placeholder="Pseo" required="" value="{{old('weight')}}">
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
                                    <option value="{{$race->id}}" {{$race->id==old('weight') ? 'selected' : ''}}>{{$race->name}}</option>
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
    
                    <button class="w-100 btn btn-primary mb-5" type="submit">Guardar</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </main>
@endsection