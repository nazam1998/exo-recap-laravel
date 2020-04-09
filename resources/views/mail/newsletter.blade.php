<div class="container">
    @foreach ($articles as $article)
    <div class="card" style="width: 18rem;margin-bottom: 20px;text-align: center">
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
    @endforeach
</div>