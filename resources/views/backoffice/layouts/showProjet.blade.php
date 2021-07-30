@extends('backoffice.homeBackOffice')

@section('backofficeContent')
    <div class="container d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-text">Nom:{{$projet->titre}}</h5>
                <p class="card-text">Age : {{$projet->description}}</p>
                <form action="{{route('deleteProjet', $projet->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{route('editProjet', $projet->id)}}" class="btn btn-warning">EDIT</a>
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </div>
          </div>
    </div>    
@endsection