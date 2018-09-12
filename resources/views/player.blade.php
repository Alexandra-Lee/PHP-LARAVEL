@extends('layouts.app')

@section('content')
    <a href="/players" class="btn btn-default go_back">Back to All Players</a>
    @if (Auth::user() && Auth::user()->type == 'admin')     
       
        <a href="/admin" class="btn btn-default go_back">Back to Admin</a>
        <a href="/players/edit" class="btn btn-primary">Edit Player</a>
        <a href="/players/delete" class="btn btn-primary">Delete Player</a>
    @endif
        <br>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th> player id</th>
                <th> player name</th>
                <th> country </th>
                <th> position </th>
                <th> goals</th>
                <th> yellow cards</th>
                <th> red cards</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> {{$player->id}} </td>
                <td> {{$player->player_name}} </td>
                <td> {{$player->country}} </td>
                <td> {{$player->position}} </td>
                <td> {{$player->goals}} </td>
                <td> {{$player->yellow_cards}} </td>
                <td> {{$player->red_cards}} </td>
            </tr>
                
@endsection