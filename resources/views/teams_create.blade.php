@extends('layouts.app')

@section('content')
<a href="/teams" class="btn btn-default go_back">Go Back</a>
<br/><br/>
<h2>ADD a TEAM</h2>
<div class="container user_form">
{!! Form::open(['action' => 'TeamsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('team_name', 'Team Name')}}
        {{Form::text('team_name', '', ['class' => 'form-control', 'placeholder' => 'i.e. Les Revolutionaires'])}}
    </div>
    <div class="form-group">
            {{Form::label('country', 'Country')}}
            {{Form::text('country', '', ['class' => 'form-control', 'placeholder' => 'Country'])}}
    </div>
    <div class="form-group">
            {{Form::label('flag', 'flag')}}
            {{Form::text('flag', '', ['class' => 'form-control', 'placeholder' => 'png, jpg, or pdf only'])}}
    </div> 
    <div class="form-group">
            {{Form::label('yellow_cards', 'Yellow Cards')}}
            {{Form::text('yellow_cards', '', ['class' => 'form-control', 'placeholder' => 'number of yellow cards'])}}
    </div>
    <div class="form-group">
            {{Form::label('red_cards', 'Red Cards')}}
            {{Form::text('red_cards', '', ['class' => 'form-control', 'placeholder' => 'number of red cards'])}}
    </div>
    <div class="form-group">
            {{Form::label('goals', 'Goals')}}
            {{Form::text('goals', '', ['class' => 'form-control', 'placeholder' => 'number of goals'])}}
    </div>
    <div class="form-group">
            {{Form::label('wins', 'Wins')}}
            {{Form::text('wins', '', ['class' => 'form-control', 'placeholder' => 'number of wins'])}}
    </div>
    <div class="form-group">
            {{Form::label('total_matches', 'Total Matches Played')}}
            {{Form::text('total_matches', '', ['class' => 'form-control', 'placeholder' => 'number of matches played'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary submit_user'])}}
{!! Form::close() !!}
</div>
@endsection
