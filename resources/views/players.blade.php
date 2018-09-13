@extends('layouts.app')

@section('content')
    <div class="container teams">

        <a href="/" class="btn btn-default go_back">Go Back</a>

    @if (Auth::user() && Auth::user()->type == 'admin')
        <a href="/admin" class="btn btn-default go_back">Back to Admin</a>
        <a href="/players/create" class="btn btn-primary">Add a Player</a>
        <a href="/players//edit" class="btn btn-primary">Edit Player</a>
        <a href="/players/delete" class="btn btn-primary">Delete Player</a>
        <br>
    @endif
    <br>
    <br>
    <div class="allOlympians">
        <h1>The Olympians</h1>
    </div>
    <div class="olympians">
        <p class="logo"><img src="{{asset('images/logo.jpg')}}" alt="Irish Games Logo"/></p>
        <p class="logo"><img src="{{asset('images/logo.jpg')}}" alt="Irish Games Logo"/></p>
        <p class="logo"><img src="{{asset('images/logo.jpg')}}" alt="Irish Games Logo"/></p>
        <p class="logo"><img src="{{asset('images/logo.jpg')}}" alt="Irish Games Logo"/></p>
        <p class="logo"><img src="{{asset('images/logo.jpg')}}" alt="Irish Games Logo"/></p>
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
                </tr>
                @endforeach
                @else <p> No players are listed. </p>
                @endif
           </tbody>
        </table>
        {{$players->links()}}
@endsection
