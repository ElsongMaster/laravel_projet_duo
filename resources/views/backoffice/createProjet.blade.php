
@extends('backoffice.homeBackOffice')

@section('backofficeContent')
    
<form action="{{route('store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Titre</label>
      <input type="text" name="titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Description</label>
      <input type="password" name="description" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
