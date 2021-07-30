@extends('backoffice.homeBackOffice')

@section('backofficeContent')
<form action="{{route('updateArticle',$article->id)}}" method="post">
@csrf
@method('PUT')
titre: <input type="text" name="titre">
image: <input type="text" name="image">
description: <input type="text" name="description">

<button class="btn btn-warning text-light">Submit</button>
</form>
@endsection