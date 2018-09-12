@extends('layouts.app')

@section('content')
<h2>EDIT a MATCH</h2>
<div class="container user_form">
{!! Form::open(['action' => ['MatchesController@update', $match->match_id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('team1', 'Team 1')}}
        {{Form::text('team1', $match->team1, ['class' => 'form-control', 'placeholder' => 'Country'])}}
    </div>   
    <div class="form-group">
            {{Form::label('team2', 'Team 2')}}
            {{Form::text('team2', $match->team2, ['class' => 'form-control', 'placeholder' => 'Country'])}}
    </div> 
    <div class="form-group">
            {{Form::label('date', 'Date')}}
            {{Form::text('date', $match->date, ['class' => 'form-control', 'placeholder' => 'user@example.com'])}}
    </div> 
    <div class="form-group">
            {{Form::label('time', 'Time')}}
            {{Form::text('time', $match->time, ['class' => 'form-control', 'placeholder' => ''])}}
    </div>   
    <div class="form-group">
        {{Form::label('goals1', 'Team 1 Goals')}}
        {{Form::text('goals1', $match->goals1, ['class' => 'form-control', 'placeholder' => ''])}}
    </div>   
    <div class="form-group">
        {{Form::label('goals2', 'Team 2 Goals')}}
        {{Form::text('goals2', $match->goals2, ['class' => 'form-control', 'placeholder' => ''])}}
    </div>     
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary submit_user'])}} 
{!! Form::close() !!}
</div>
@endsection