@extends('layouts.app')

@section('content')
<div class="container text-center">
    <table class="text-center">
        <thead>
            <tr>
                <th colspan="8">Liste des Articles</th>
            </tr>
            <tr>
                <th>Name</th>
                <th>Newsletter envoyée</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>
                    @can('sent',$item, User::class)
                    <i class="fas fa-times text-danger"></i>
                        @else 
                        <i class="fas fa-check text-success"></i>
                    @endcan
                </td>
                <td>
                    <a href="{{route('showUser',$item)}}" class="btn btn-success">Show</a>
                </td>
                <td>
                    <a href="{{route('editUser',$item)}}" class="btn btn-warning">Edit</a>
                </td>
                <td>
                    <a href="{{route('deleteUser',$item)}}" class="btn btn-danger">Delete</a>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
