@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <table>
            <thead>
                <tr>
                    <th colspan="6">Register Mail</th>
                </tr>
                <tr
                ><th>Message</th>
                ><th>Name</th>
                ><th>Email</th>
                ><th>Password</th>
                ><th>Action</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                <td>{{$mail->contenu}}</td>
                <td>{{$mail->name}}</td>
                <td>{{$mail->email}}</td>
                <td>{{$mail->password}}</td>
                    <td><a href="{{route('editMail',$mail)}}" class="btn btn-warning">Edit</a></td>

                </tr>
            </tbody>
        </table>
    </div>
@endsection
