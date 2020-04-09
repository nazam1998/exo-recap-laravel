@extends('layouts.app')

@section('content')
<div class="container text-center mx-auto">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Name: {{$user->name}}</h5>
            <p class="card-text">Email: {{$user->email}}</p>
            <p class="card-text">
            <form action="{{route('newsUser',$user)}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Number of Articles in Newsletter</label>
                <input type="number" class="form-control" name="news" value="{{old('news',$user->news)}}">
                <button type="submit" class="btn @can('sent',$user,App\User::class)btn-warning @else btn-secondary @endcan mt-2" @cannot('sent',$user,App\User::class)disabled @endcannot>Envoyer</button>
                </div>
            </form>
            </p>
        </div>
    </div>
</div>
@endsection
