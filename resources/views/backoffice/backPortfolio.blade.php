
@extends('backoffice.homeBackOffice')

@section('backofficeContent')
<table class="table">
  <div>
    <a href="{{route('createProjet')}}" class="btn btn-primary">Create</a>
  </div>
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
            <a href="{{route('show', $item->id)}}" class="btn btn-info">SHOW</a> 
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection