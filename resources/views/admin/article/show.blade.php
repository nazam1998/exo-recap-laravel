@extends('layouts.app')

@section('content')
<div class="container text-center mx-auto">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('storage/'.$article->image)}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$article->titre}}</h5>
            <p class="card-text">{{$article->texte}}</p>
            <small class="card-text text-secondary">Article rédigé par {{$article->user->name}} le
                {{$article->created_at->format('d-m-Y')}} à
                {{$article->created_at->toTimeString()}}
            </small>
        </div>
    </div>
</div>
@endsection
