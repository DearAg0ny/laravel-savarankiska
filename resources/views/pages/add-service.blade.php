@extends('main')
@section('content')
    <h1 class="mt-4">Pridėti Servisą</h1>
    @include('_partials/errors')
    <form action="/storeService" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group m-1">
            <input type="text" name="title" class="form-control" placeholder="Serviso pavadinimas">
        </div>
        <div class="form-group m-1">
            <input type="text" name="address" class="form-control" placeholder="Serviso adresas">
        </div>
        <div class="form-group m-1">
            <input type="text" class="form-control" name="manager" placeholder="Serviso vadovas">
        </div>
        <div class="form-group m-1">
            <button type="submit" class="btn btn-primary">Saugoti</button>
        </div>
    </form>
@endsection
