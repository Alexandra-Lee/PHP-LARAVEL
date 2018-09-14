@extends('layouts.app')

@section('content')
    <div class="container">
    @if (Auth::user() && Auth::user()->type == 'default')
        <a href="/matches" class="btn btn-default go_back">Back to All Matches</a>
    @endif
    @if (Auth::user() && Auth::user()->type == 'admin')
        <a href="/matches" class="btn btn-default go_back">Go Back</a>
        <a href="/admin" class="btn btn-default go_back">Back to Admin</a>
        <a href="/matches/{{$match->match_id}}/edit" class="btn btn-primary">Edit Match</a>
        <br/><br/>
    @endif
        <br>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th> match id</th>
                <th> team one</th>
                <th> team two </th>
                <th> date -- time</th>
                <th> bets for team 1</th>
                <th> bets for team 2</th>
                <th> total of WAGERS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> {{$match->match_id}} </td>
                <td> {{$match->team1}} </td>
                <td> {{$match->team2}} </td>
                <td> {{$match->date}} -- {{$match->time}}</td>
                <td> number </td>
                <td> number </td>
                <td> $$$ </td>
                @if (Auth::user() && Auth::user()->type == 'admin')
                <td>
                    {!!Form::open(['action' => ['MatchesController@destroy', $match->match_id], 'method', 'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}</td>
                @endif
            </tr>

@endsection
