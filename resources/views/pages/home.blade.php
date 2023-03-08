@extends('main')
@section('content')
    <h1 class="mt-4">Servisai</h1>
    <div class="row">
        @foreach($services as $service)
            <div class="col-4">
                <style>
                    li {list-style-type: none;}
                </style>
                <ul class="card p-2">
                    <li>{{$service->service_name}}</li>
                    <li><a href="/service/{{$service->id}}">Plačiau...</a></li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection
