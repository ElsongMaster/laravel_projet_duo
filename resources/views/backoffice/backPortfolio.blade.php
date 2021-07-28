
@extends('backoffice.homeBackOffice')

@section('backofficeContent')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        <th scope="col">Description</th>
        <th class="col">Delete</th>
        <th class="col">Create</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($datas as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->titre}}</td>
        <td>{{$item->description}}</td>
        <td>
          <form action="{{route('delete', $item->id)}}" method="POST">
            @csrf
            <button type="submit" class="btn bg-danger">DELETE</button>
          </form>
        </td>
        <td>
          <a href="{{route('createProjet')}}" class="btn btn-primary">Create</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection