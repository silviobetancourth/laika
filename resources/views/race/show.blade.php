@extends('templay')

@section('contents')
    
    <main class="container">

        <div class="p-4 p-md-5 mb-4 text-white rounded bg-primary">
            <div class="col-md-12 px-0 text-center">
                <h1 class="display-4 fst-italic">{{$races->name}}</h1>
            </div>
        </div>
        <h4 class="mb-3 text-end"><a type="button" class="btn btn-primary px-4 gap-3" href="{{route('race')}}">Regresar</a></h4>

    </main>
@endsection