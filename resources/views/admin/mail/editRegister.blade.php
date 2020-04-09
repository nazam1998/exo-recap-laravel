@extends('layouts.app')

@section('content')

<form action="{{route('updateMailRegister',$mail->id)}}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Contenu</label>
        @error('texte')
        {{$message}}
        @enderror
        <textarea class="form-control" name="texte">{{old('texte',$mail->contenu)}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary d-inline-block">Ajouter</button>
</form>
@endsection
