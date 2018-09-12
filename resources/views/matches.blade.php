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
    <h1>MATCHES</h1>
    <br>
    <h3>NEXT MATCH</h3>
    <br>
    
    @if (count($matches) > 0)
    <ul class="list-group">
        @foreach ($matches as $match)
        <div class="container">
            <li class="list-group-item"><div class="row team">
                <div class="col-sm">
                    <h4>Match ID: {{$match->match_id}}</h4> 
                </div>    
                <div class="col-sm">
                    <a href="/matches/{{$match->match_id}}">
                       
                    <h3>{{$match->team1}}</h3><!--<img src="" width="60" height="50"/> -->
                    VS.
                    <h3>{{$match->team2}}</h3><!-- <img src="" width="60" height="50"/> -->
                    </a>    
                </div>
                <div class="col-sm">
                    <h4>{{$match->date}}</h4>
                </div>
                <div class="col-sm">
                    <h4>{{$match->time}}</h4>
                </div>  
                
                <div class="col-sm">
                    <h4>{{$match->goals1}}</h4>
                </div>
                <div class="col-sm">
                    <h4>{{$match->goals2}}</h4>
                </div>
                <div class="col-sm">
                    @if (Auth::user()->type == 'default')     
                        <a href="/bets/create" class="btn btn-primary">Add My Bet</a>
                        <br/><br/>
                        <a href="/bets//edit" class="btn btn-primary">Edit My Bet</a>
                    @endif  
                </div>      
            </li>    
        </div> 
        @endforeach
    </ul>
    <br/>  
    
    {{$matches->links()}}
       
    @else <p> There are no matches listed. </p>
    @endif  
    </div>
@endsection