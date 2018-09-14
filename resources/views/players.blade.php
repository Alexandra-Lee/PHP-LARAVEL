@extends('layouts.app')

@section('content')
    <div class="container teams">

        <a href="/" class="btn btn-default go_back">Go Back</a>

    @if (Auth::user() && Auth::user()->type == 'admin')
        <a href="/admin" class="btn btn-default go_back">Back to Admin</a>
        <a href="/players/create" class="btn btn-primary">Add a Player</a>
        <br>
    @endif
    <br>
    <br>
    <div class="allOlympians">
        <h1>The Olympians</h1>
        <p class="logo"><img src="{{asset('images/logo.jpg')}}" alt="Irish Games Logo"/></p>
        <p><h4>(Click on player name to EDIT or DELETE)</h4></p>
    </div>

    <br>
    <table class="table table-striped">
            <thead>
                <tr>
                    <th> Player Name</th>
                    <th> Country</th>
                    <th> Position</th>
                    <th> Age </th>
                    <th> Weight</th>
                    <th> Height</th>

                </tr>
            </thead>
            <tbody>
                @if (count($players) > 0)
                @foreach($players as $player)
                <tr>
                    <td><a href="players/{{$player->id}}">{{$player->player_name}}</a></td>
                    <td>{{$player->country}}</td>
                    <td> {{$player->position}} </td>
                    <td> {{$player->age}} </td>
                    <td> {{$player->weight}} </td>
                    <td> {{$player->height}} </td>
                    <td> {{$player->yellow_cards}} </td>
                    <td> {{$player->red_cards}} </td>
                    <td> {{$player->goals}} </td>
                </tr>
                @endforeach
                @else <p> No players are listed. </p>
                @endif
           </tbody>
        </table>
        {{$players->links()}}
@endsection
