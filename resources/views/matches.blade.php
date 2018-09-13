@extends('layouts.app')

@section('content')

    <div class="container">
        @if (Auth::user() && Auth::user()->type == 'default')
        <a href="/" class="btn btn-default go_back">Go Back</a>
        @endif
        @if (Auth::user() && Auth::user()->type == 'admin')
            <a href="/admin" class="btn btn-default go_back">Back to Admin</a>
            <a href="/matches/create" class="btn btn-primary">Add Match</a>
            <br>
            <br>
        @endif
    <div class="matchesTitle">
        <h1>MATCHES</h1>
    </div>
    <br>
    <table class="table table-striped">
            <thead>
                <tr>
                    <th> Match No.</th>
                    <th> Teams</th>
                    <th> Date</th>
                    <th> Time</th>
                    <th> Team 1 Goals</th>
                    <th> Team 2 Goals</th>
                </tr>
            </thead>
            <tbody>
                @if (count($matches) > 0)
                    @foreach ($matches as $match)
                    <tr>
                        <td><a href="/matches/{{$match->match_id}}">{{$match->match_id}}</a></td>
                        <td>{{$match->team1}}
                        VS.
                        {{$match->team2}} <!-- <img src="" width="60" height="50"/> -->
                        </td>

                        <td>{{$match->date}}</td>

                        <td>{{$match->time}}</td>
                        <td>{{$match->goals1}}</td>
                        <td>{{$match->goals2}}</td>

                        <td>
                            @if (Auth::user()->type == 'default')
                                <a href="/bets/create" class="btn btn-primary">Add My Bet</a>
                                <br/><br/>
                                <a href="/bets//edit" class="btn btn-primary">Edit My Bet</a>
                            @endif
                        </td>
                    </tr>
            </tbody>
                    @endforeach
    </table>
    <br/>

    {{$matches->links()}}

    @else <p> There are no matches listed. </p>
    @endif
    </div>
@endsection
