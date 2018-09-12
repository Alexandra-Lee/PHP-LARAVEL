@extends('layouts.app')

@section('content')
    <div class="container">
            
        <a href="/" class="btn btn-default go_back">Go Back</a>
        @if (Auth::user()->type == 'default') 
        <a href="/matches" class="btn btn-primary">Choose a match</a>
        @endif    
        <br>
        TO BET OR NOT TO BET, THAT IS THE QUESTION. 
    </div>
    
@endsection