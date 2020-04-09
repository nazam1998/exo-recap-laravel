@extends('layouts.app')

@section('content')
<div class="container">

    <form action="{{route('updateMail',$mail->id)}}" method="post">
        @csrf
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="name" id=""@if($mail->name)checked @endif>
            <label for="" class="form-check-label">Name</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="email" id="" @if($mail->email)checked @endif>
            <label for="" class="form-check-label">Email</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="password" @if($mail->password)checked @endif>
            <label for="" class="form-check-label">Password</label>
        </div>
        
        <div class="form-group">
            <label for="">Contenu</label>
            @error('texte')
            {{$message}}
            @enderror
            <textarea class="form-control" name="contenu">{{old('texte',$mail->contenu)}}</textarea>
        </div>
        
        <button type="submit" class=" my-2 btn btn-primary d-inline-block">Modifier</button>
    </form>
</div>
    @endsection
    