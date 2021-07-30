@extends('backoffice.homeBackOffice')

@section('backofficeContent')
<form action="{{route('updateProjet',$projet->id)}}" method="post">
@csrf
@method('PUT')
Titre: <input type="text" value="{{$projet->titre}}" name="titre">
Description: <input type="text"value="{{$projet->description}}" name="description">
Image: <input type="text" value="{{$projet->image}}" name="image">

<button class="btn btn-warning text-light">Submit</button>
</form>
@endsection