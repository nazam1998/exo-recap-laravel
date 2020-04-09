@extends('layouts.app')

@section('content')
<div class="container text-center">
    @can('create', App\Article::class)  
    <a href="{{route('article.create')}}" class="btn btn-primary">Ajouter Article</a>
    @endcan
    <table class="text-center">
        <thead>

            <tr>
                <th colspan="8">Liste des Articles</th>
            </tr>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Image</th>
                <th>Texte</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->titre}}</td>
                <td>
                    <img src="{{asset('storage/'.$item->image)}}" alt="">
                </td>
                <td>{{$item->texte}}</td>
                <td>
                    @can('view',$item,App\Article::class)
                    <a href="{{route('article.show',$item)}}" class="btn btn-success">Show</a>
                    @endcan
                </td>
                <td>
                    @can('update',$item,App\Article::class)
                        <a href="{{route('article.edit',$item)}}" class="btn btn-warning">Edit</a>
                    @endcan
                </td>
                
                @can('delete',$item,App\Article::class)
                <td>
                    <form action="{{ route('article.destroy', $item) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
                @endcan
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
