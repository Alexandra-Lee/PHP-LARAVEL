@extends('layouts.app')

@section('content')
    <div class="container">

            <a href="/teams" class="btn btn-default go_back">Go Back</a>

        @if (Auth::user() && Auth::user()->type == 'admin')
            <a href="/admin" class="btn btn-default go_back">Back to Admin</a>
            <a href="/players/create" class="btn btn-primary">Add a Player</a>
            <a href="/players/edit" class="btn btn-primary">Edit Player</a>
            <a href="/players/delete" class="btn btn-primary">Delete a Player</a>
        <br>
        @endif
    <br>
    <br>
            <div class="row across">
                <div class="flags_across" style="background-image: url('{{ asset($team->flag) }}')"></div>
                <h1 class="country_name">{{$team->team_name}}</h1>
                <div class="flags_across" style="background-image: url('{{ asset($team->flag) }}')"></div>
            </div>

                    <br/>
                    <br/>
                    <table class="table table-striped table_players">
                        <thead>
                            <tr>
                                <th> Player Number</th>
                                <th> Name</th>
                                <th> Position</th>
                                <th> Age </th>
                                <th> Height</th>
                                <th> Weight</th>
                            </tr>
                        </thead>

                        @foreach ($team->players as $player)
                        <tbody>
                        <tr>
                            <td>{{$player->id}}</td>
                            <td>{{$player->player_name}}</td>
                            <td>{{$player->position}}</td>
                            <td>{{$player->age}}</td>
                            <td>{{$player->height}}</td>
                            <td>{{$player->weight}}</td>
                        </tr>
                        </tbody>
                        @endforeach

                    </table>
@endsection
