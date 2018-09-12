@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/matches" class="btn btn-default go_back">Back to All Matches</a>
    @if (Auth::user() && Auth::user()->type == 'admin')     
        
        <a href="/admin" class="btn btn-default go_back">Back to Admin</a>
        <a href="/matches/{{$match->match_id}}/edit" class="btn btn-primary">Edit Match</a>
        <br/><br/>
        {!!Form::open(['action' => ['MatchesController@destroy', $match->match_id], 'method', 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    @endif
        <br>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th> match id</th>
                <th> team one</th>
                <th> team two </th>
                <th> date </th>
                <th> time</th>
                <th> team 1 goals</th>
                <th> team 2 goals</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> {{$match->match_id}} </td>
                <td> {{$match->team1}} </td>
                <td> {{$match->team2}} </td>
                <td> {{$match->date}} </td>
                <td> {{$match->time}} </td>
                <td> {{$match->goals1}} </td>
                <td> {{$match->goals2}} </td>
            </tr>
                
@endsection