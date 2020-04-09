@extends('layouts.app')

@section('content')
    <div class="text-center container">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
            <div class="card col-3 m-3" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('storage/'.$article->image)}}" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title">{{$article->titre}}</h5>
                    <p class="card-text">{{$article->texte}}</p>
                    <small class="card-text text-secondary">Article rédigé par {{$article->user->name}} le
                        {{$article->created_at->format('d-m-Y')}} à
                        {{$article->created_at->toTimeString()}}
                    </small>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection