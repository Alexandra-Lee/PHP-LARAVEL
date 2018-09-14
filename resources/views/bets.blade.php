@extends('layouts.app')

@section('content')
    <div class="container">

        <a href="/" class="btn btn-default go_back">Go Back</a>
        @if (Auth::user()->type == 'default')
        <a href="/matches" class="btn btn-primary">Choose a match</a>
        @endif
        <br>
        <div class="matchesTitle">
        <h1>BETS ARE ON!</h1>
        </div>
        <br>
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> Bet ID</th>
                            <th> Match ID</th>
                            <th> Wager On </th>
                            <th> Amount</th>
                            <th> Winner</td>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($bets) > 0)
                            @foreach ($bets as $bet)
                            <tr>
                                <td>{{$bet->bet_id}}</td>

                                <td><a href="/matches">{{$bet->match_id}}</a></td>

                                <td>{{$bet->country}}</td>

                                <td>{{$bet->amount}}</td>
                                <td> {{$bet->winner}}</td>
                                <td>
                                    @if (Auth::user()->type == 'admin')
                                        <a href="/bets/edit" class="btn btn-primary">Edit Bet Result</a>
                                    @endif
                                </td>
                            </tr>
                    </tbody>
                            @endforeach
            </table>
        <br/>

    {{$bets->links()}}

    @else <p> There are no bets listed. </p>
    @endif
    </div>
    </div>

@endsection
