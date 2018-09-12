@extends('layouts.app')

@section('content')
<a href="/matches" class="btn btn-default go_back">Go Back</a>
<br/><br/>
<h2>ADD a MATCH</h2>
<div class="container user_form">
{!! Form::open(['action' => 'MatchesController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('team1', 'Team 1')}}
        {{Form::text('team1', '', ['class' => 'form-control', 'placeholder' => 'Country'])}}
    </div>   
    <div class="form-group">
            {{Form::label('team2', 'Team 2')}}
            {{Form::text('team2', '', ['class' => 'form-control', 'placeholder' => 'Country'])}}
    </div> 
    <div class="form-group">
            {{Form::label('date', 'Date')}}
            {{Form::text('date', '', ['class' => 'form-control', 'placeholder' => 'ex: 01/06, Day'])}}
    </div> 
    <div class="form-group">
            {{Form::label('time', 'Time')}}
            {{Form::text('time', '', ['class' => 'form-control', 'placeholder' => '20:00'])}}
    </div>     

    {{Form::submit('Submit', ['class' => 'btn btn-primary submit_user'])}} 
{!! Form::close() !!}
</div>
@endsection