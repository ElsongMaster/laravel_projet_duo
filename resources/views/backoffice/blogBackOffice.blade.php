@extends('backoffice.homeBackOffice')


@section('backofficeContent')
    <section class="row">
        @foreach ($datas as $item )
        <div class="card" style="width: 18rem;">
        <img src="{{asset($item->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$item->titre}}</h5>
            <p class="card-text">{{$item->description}}</p>
            <div class="container d-flex justify-content-between">          
            <a href="{{route('showArticle', $item->id)}}" class="btn btn-info">SHOW</a> 
        
            </div>
        </div>
        </div>
        @endforeach
    </section>
@endsection