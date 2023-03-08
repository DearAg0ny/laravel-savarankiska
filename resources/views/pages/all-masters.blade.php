@extends('main')
@section('content')
<div class="card mt-2 mx-5">
        <nav class="navbar" style="background-color: mediumseagreen">
            <form class="form-inline">
                <input class="form-control m-sm-2" type="search" placeholder="Paieška" aria-label="Search">
            </form>
        </nav>
    </div>
    <div class="card m-5">
        @foreach($mechanics as $master)
            <div id="container">
                    <img src="{{asset('/storage/'.$master->photo)}}" style="height: 110px; width: 130px; float: left; padding: 5px;">
                <ul style="padding-top: 5px;">
                    <li>{{$master->name}} {{$master->lname}}<li>
                    <li>{{$master->type}}</li>
                    <li>{{$master->service_id}}</li>
                    <li>{{$master->city}}</li>
                </ul>
                <h4>Veiksmai:</h4>
                <ul>
                    <li><a href="/master/edit/{{$master->id}}">Redaguoti</a></li>
                    <li><a href="/master/delete/{{$master->id}}">Šalinti</a></li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection
