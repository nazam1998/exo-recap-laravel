@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajout d'Article</h1>
    <form action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Titre</label>
            @error('titre')
            {{$message}}
            @enderror
            <input type="text" class="form-control" name="titre" value="{{old('titre')}}">
        </div>

        <div class="form-group">
            <label for="">Image</label>
            @error('image')
                {{$message}}
            @enderror
            <input type="file" class="form-control" name="image">
        </div>

        <div class="form-group">
            <label for="">Texte</label>
            @error('texte')
            {{$message}}
            @enderror
            <textarea class="form-control" name="texte">{{old('texte')}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary d-inline-block">Ajouter</button>
    </form>
</div>
@endsection
