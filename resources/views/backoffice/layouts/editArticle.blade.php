@extends('backoffice.homeBackOffice')

@section('backofficeContent')
<form action="{{route('updateArticle',$article->id)}}" method="post">
@csrf
@method('PUT')
titre: <input type="text" value="{{$article->titre}}" name="titre">
image: <input type="text" value="{{$article->image}}" name="image">
description: <input type="text" value="{{$article->description}}" name="description">

<button class="btn btn-warning text-light">Submit</button>
</form>
@endsection