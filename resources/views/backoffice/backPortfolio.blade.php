
@extends('backoffice.homeBackOffice')

@section('backofficeContent')
<section class="d-flex flex-column justify-content-center">
  <table class="table">

    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        <th scope="col">Description</th>
        <th class="col">Show</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach ($datas as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->titre}}</td>
        <td>{{$item->description}}</td>
        <td>
            <a href="{{route('showProjet', $item->id)}}" class="btn btn-info">SHOW</a> 
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
      <div class="d-flex justify-content-center my-5">
      <a href="{{route('createProjet')}}" class="btn btn-warning  w-25">Create</a>
    </div>
</section>
@endsection