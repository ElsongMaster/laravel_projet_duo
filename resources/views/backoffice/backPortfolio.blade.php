
@extends('backoffice.homeBackOffice')

@section('backofficeContent')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        <th scope="col">Description</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($datas as $item)
      <tr>
        <th scope="row">{{$item->titre}}</th>
        <td>{{$item->description}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection