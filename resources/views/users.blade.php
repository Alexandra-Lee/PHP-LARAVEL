@extends('layouts.app')

@section('content')
<div class="container teams">
    <div class="user_buttons">
    @if (Auth::user()->type == 'admin')
    <a href="/admin" class="btn btn-default go_back">Back to Admin</a>
    <a href="/users/create" class="btn btn-primary">Add User</a>
    </div>
    <br>
    <br>
    <br>
    <h1>Registry of Users</h1>
    <br>
    <table class="table table-striped">
            <thead>
                <tr>
                    <th> user id</th>
                    <th> name</th>
                    <th> type </th>
                    <th> email </th>
                    <!-- <th> password</th> -->
                </tr>
            </thead>
            <tbody>
                @if (count($users) > 0)
                @foreach($users as $user)
                <tr>
                    <td><a href="users/{{$user->id}}">{{$user->id}}</a></td>
                    <td><a href="users/{{$user->id}}">{{$user->name}}</a></td>
                    <td> {{$user->type}} </td>
                    <td> {{$user->email}} </td>
                    <!-- <td> {{$user->password}} </td> -->
                    <td><a href="/teams/edit" class="btn btn-primary">Edit User</a></td>
                    <td><a href="/teams/delete" class="btn btn-primary">Delete User</a></td>
                </div>
                </tr>
                @endforeach
                {{$users->links()}}
                @else <p> There are no users listed. </p>
                @endif
           </tbody>
        </table>
    @endif
</div>
@endsection
