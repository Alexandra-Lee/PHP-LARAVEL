@extends('layouts.app')

@section('content')
    <div class="container">
    @if (Auth::user()->type == 'admin')     
        <a href="/users" class="btn btn-default go_back">Back to All Users</a>
        <a href="/users" class="btn btn-default go_back">Back to Admin</a>
        <a href="/users/{{$user->id}}/edit" class="btn btn-primary">Edit User</a>
        <br/><br/>
        {!!Form::open(['action' => ['UsersController@destroy', $user->id], 'method', 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
       
    @endif
        <br>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th> user id</th>
                <th> name</th>
                <th> type </th>
                <th> email </th>
                <th> password</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> {{$user->id}} </td>
                <td> {{$user->name}} </td>
                <td> {{$user->type}} </td>
                <td> {{$user->email}} </td>
                <td> {{$user->password}} </td>
            </tr>
        </tbody>
    </table>
    <hr>
    <br>
@endsection