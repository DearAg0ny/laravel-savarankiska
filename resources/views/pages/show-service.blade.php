@extends('main')
@section('content')
    <div class="card mt-5">
        <h1 class="mt-4">{{$service->title}}</h1>
        <h3>Kita informacija apie servisą:</h3>
        <ul>
            <li>Adresas: {{$service->address}}</li>
            <li>Vadovas: {{$service->manager}}</li>
        </ul>
        <h4>Veiksmai:</h4>
        <ul>
            <li><a href="/service/edit/{{$service->id}}">Redaguoti</a></li>
            <li><a href="/service/delete/{{$service->id}}">Šalinti</a></li>
        </ul>
    </div>



@endsection
