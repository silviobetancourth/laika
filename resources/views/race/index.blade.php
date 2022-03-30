@extends('templay')

@section('contents')
    <main class="container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-12 px-0 text-center">
            <h1 class="display-4 fst-italic">Razas</h1>
        </div>
        </div>
    
        <h4 class="mb-3 float-end"><a type="button" class="btn btn-primary px-4 gap-3" href="{{route('race.create')}}">Agregar</a></h4>

        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($races as $race)
                    <tr>
                        <td>{{$race->id}}</td>
                        <td>{{$race->name}}</td>
                        <td>
                            <a type="button" class="btn btn-primary btn-sm px-4 gap-3" href="{{route('race.show', $race->id)}}">view</i></a>
                            <a type="button" class="btn btn-primary btn-sm px-4 gap-3" href="{{route('race.edit', $race->id)}}">edit</i></a>
                            <form action="{{route('race.delete', $race->id)}}" method="POST"> @csrf @method('delete') <button class="btn btn-primary btn-sm px-4 gap-3" type="submit">Eliminar</button> </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>

          {{$races->links()}}
    </main>
@endsection