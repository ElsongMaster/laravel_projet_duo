@extends('template.index')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-text">Nom:{{$projects->titre}}</h5>
                <p class="card-text">Age : {{$projects->description}}</p>
                <form action="{{route('delete', $projects->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-warning">DELETE</button>
                </form>
            </div>
          </div>
    </div>    
@endsection