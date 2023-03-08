@extends('main')
@section('content')
    <div class="card mt-5">
        <h1 class="mt-4">{{$master->name}}</h1>
        <p>{{$master->lname}}</p>
        <h3>Kita informaciją meistrą:</h3>
        <img src="{{asset('/storage/'.$master->photo)}}" alt="">
        <ul>
            <li>{{$master->type}}</li>
            <li>{{$master->city}}</li>
            <li>{{$master->service_id}}</li>
        </ul>
        <h4>Veiksmai:</h4>
        <ul>
            <li><a href="/movie/edit/{{$master->id}}">Redaguoti</a></li>
            <li><a href="/movie/delete/{{$master->id}}">Šalinti</a></li>
        </ul>
    </div>



@endsection
