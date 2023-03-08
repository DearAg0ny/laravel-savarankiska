@extends('main')
@section('content')
    <h1 class="mt-4">Redaguoti informaciją apie servisą</h1>
    @include('_partials/errors')
    <form action="/update/{{$service->id}}" method="post">
        @csrf
        <div class="form-group m-1">
            <input type="text" name="service_name" class="form-control" placeholder="Serviso pavadinimas" value="{{$service->service_name}}">
        </div>
        <div class="form-group m-1">
            <input type="text" name="address" class="form-control" placeholder="Serviso adresas" value="{{$service->address}}">
        </div>
        <div class="form-group m-1">
            <input type="text" class="form-control" name="manager" placeholder="Serviso vadovas" value="{{$service->manager}}">
        </div>
        <div class="form-group m-1">
            <button type="submit" class="btn btn-primary">Saugoti</button>
        </div>
    </form>
@endsection
