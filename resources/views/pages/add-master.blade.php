@extends('main')
@section('content')
    <h1 class="mt-4">Pridėti meistrą</h1>
    @include('_partials/errors')
    <form action="/storeMaster" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group m-1">
            <input type="text" name="name" class="form-control" placeholder="Vardas">
        </div>
        <div class="form-group m-1">
            <input type="text" class="form-control" name="lname" placeholder="Pavardė">
        </div>
        <div class="form-group m-1">
            <input type="text" class="form-control" name="type" placeholder="Specializacija">
        </div>
        <div class="form-group m-1">
            <input type="text" class="form-control" name="city" placeholder="Miestas">
        </div>
        <div class="form-group m-1">
            <select name="service_id" class="form-control">
                <option selected disabled>Pasirinkite servisą</option>
                @foreach($services as $service)
                    <option value="{{$service->title}}">{{$service->title}}</option>
                @endforeach
            </select>
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
