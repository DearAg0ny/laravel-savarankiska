@extends('main')
@section('content')
    <h1 class="mt-4">Redaguoti informaciją apie meistrą</h1>
    @include('_partials/errors')
    <form action="/master/update/{{$mechanic->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group m-1">
            <input type="text" name="name" class="form-control" placeholder="Vardas" value="{{$mechanic->name}}">
        </div>
        <div class="form-group m-1">
            <input type="text" name="lname" class="form-control" placeholder="Pavardė" value="{{$mechanic->lname}}">
        </div>
        <div class="form-group m-1">
            <input type="text" class="form-control" name="type" placeholder="Specializacija" value="{{$mechanic->type}}">
        </div>
        <div class="form-group m-1">
            <input type="text" class="form-control" name="city" placeholder="Miestas" value="{{$mechanic->city}}">
        </div>
        <div class="div-group m-1">
            <label>Nuotrauka</label>
            <input type="file" class="form-control" name="photo">
        </div>
        <div class="form-group m-1">
            <button type="submit" class="btn btn-primary">Saugoti</button>
        </div>
    </form>
@endsection
