@extends('backoffice.homeBackOffice')

@section('backofficeContent')
<form action="{{route('updateProjet',$projet->id)}}" method="post">
@csrf
@method('PUT')
titre: <input type="text" name="titre">
description: <input type="text" name="description">
image: <input type="text" name="image">

<button class="btn btn-warning text-light">Submit</button>
</form>
@endsection