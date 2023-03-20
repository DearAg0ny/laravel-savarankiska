@extends('main')
@section('content')
    <div class="card mt-2 mx-5">
        <nav class="navbar" style="background-color: mediumseagreen">
            <form class="form-inline" action="/searchMaster" method="post">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-5">
                        <input class="form-control m-sm-2" type="search" name="search" placeholder="Įveskite meistro vardą" aria-label="Search">
                    </div>
                    <div class="col-sm-5 mt-2">
                        <select class="form-select" aria-label="Default select example" name="type">
                            <option selected disabled>Pasirinkite specialybę</option>
                                @foreach($mechanics as $master)
                                    <option value="{{$master->type}}">{{$master->type}}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="col-sm-2 mt-2">
                        <button type="submit" class="btn btn-primary">Ieškoti</button>
                    </div>
                </div>
            </form>
        </nav>
    </div>
    <div class="card m-5">
        <div class="row">
        @foreach($mechanics as $master)
            <div id="container" class="col-sm-4">
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
            <div class="col-sm-4 align-items-start"><h6>Reitingas:⭐⭐⭐⭐⭐({{$master->rating++}})</h6>
                <form action="/update-rating" method="post">
                    @csrf
                    <input type="submit" name="addRating" value="❤">
                </form>
            </div>
        @endforeach
        </div>
    </div>
@endsection
