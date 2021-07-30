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
                <form action="{{route('deleteArticle',$item->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                <button class="btn btn-danger text-light" type="submit">delete</button>
                </form>
                <a href="{{route('createArticle')}}" class="btn btn-primary text-light">create</a>
            </div>
        </div>
        </div>
        @endforeach
    </section>
@endsection