@extends('main')
@section('content')
    <div class="card mt-2 mx-5">
        <nav class="navbar" style="background-color: mediumseagreen">
            <form class="form-inline" action="/searchMaster" method="post">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-8">
                        <input class="form-control m-sm-2" type="search" name="search" placeholder="Įveskite meistro vardą" aria-label="Search">
                    </div>
                    <div class="col-sm-4 mt-2">
                        <button type="submit" class="btn btn-primary">Ieškoti</button>
                    </div>
                </div>
            </form>
        </nav>
    </div>
    <div class="card m-5">
        @foreach($mechanics as $master)
            <div id="container">
                    <img src="{{asset('/storage/'.$master->photo)}}" style="height: 100px; width: 120px; float: left; padding: 10px;">
                <ul style="padding-top: 5px;">
                    <li>{{$master->name}} {{$master->lname}}<li>
                    <li>{{$master->type}}</li>
                    <li>{{$master->service_id}}</li>
                    <li>{{$master->city}}</li>
                </ul>
                @if(Auth::check())
                <h4>Veiksmai:</h4>
                <ul>
                    <li><a href="/master/edit/{{$master->id}}">Redaguoti</a></li>
                    <li><a href="/master/delete/{{$master->id}}">Šalinti</a></li>
                </ul>
                @else
                @endif
            </div>
        @endforeach
    </div>
@endsection
