@extends('layouts.app')

@section('content')
    <div class="container teams">
        <a href="/" class="btn btn-default go_back">Go Back</a>

    @if (Auth::user() && Auth::user()->type == 'admin')
        <a href="/admin" class="btn btn-default go_back">Back to Admin</a>
        <a href="/teams/create" class="btn btn-primary">Add a Team</a>
        <br>
    @endif
    <br>
    <br>
    <h1>The Olympic Teams</h1>
    <br>

    @if (count($teams) > 0)
    <ul class="list-group">
        @foreach ($teams as $team)
        <div class="container">
            <li class="list-group-item"><div class="row team">
                <div class="col-sm">
                    <a href="teams/{{$team->id}}">
                        <h3>{{$team->team_name}}</h3></a>
                </div>
                <div class="col-sm">
                    <a href="teams/{{$team->id}}">
                        <h3>{{$team->country}}</h3></a>
                </div>
                <div class="col-sm flag">
                    <a href="teams/{{$team->id}}"><img src="{{ $team->flag }}" width="60" height="50"
                    /></a>
                </div>
                <div class="col-sm team_buttons">
                    <a href="/teams/edit" class="btn btn-primary">Edit Team</a>
                    <a href="/teams/delete" class="btn btn-primary">Delete Team</a>
                </div>
            </li>
        </div>
        @endforeach
    </ul>
    <br/>

    {{$teams->links()}}

    @else <p> There are no teams listed. </p>
    @endif
    </div>
    <!-- flags need to be given credit in order to use
    <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" </a> from <a href="https://www.flaticon.com/"     title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"
        title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>  -->
@endsection
