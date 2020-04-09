@extends('layouts.app')

@section('content')
<div class="container">
<h1>Modificatio d'User</h1>
    <form action="{{route('updateUser',$user)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            @error('name')
            {{$message}}
            @enderror
            <input type="text" class="form-control" name="name" value="{{old('name',$user->name)}}">
        </div>

        <div class="form-group">
            <label for="">Email</label>
            @error('email')
            {{$message}}
            @enderror
        <input type="email" class="form-control" name="email" value="{{old('email',$user->email)}}">
        </div>

        <div class="form-group">
            <label for="">Mot de passe</label>
            @error('password')
            {{$message}}
            @enderror
            <input type="password" class="form-control" name="password">
        </div>

        <div class="form-group">
            <label for="">Rôle</label>
            <select name="role_id" id="">
                @foreach ($roles as $item)
            <option value="{{$item->id}}" @if($user->role_id==$item->id)selected @endif>{{$item->role}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary d-inline-block">Ajouter</button>
    </form>
</div>
@endsection
