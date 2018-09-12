@extends('layouts.app')

@section('content')
<a href="/matches" class="btn btn-default go_back">Go Back to Matches</a>
<br/><br/>
<h2>PLACE a BET</h2>
<div class="container user_form">
{!! Form::open(['action' => 'BetsController@store', 'method' => 'POST']) !!}
    <!--
    <div class="form-group">
        {{Form::label('match_id', 'Match ID')}}
        {{Form::text('match_id', '', ['class' => 'form-control', 'placeholder' => 'put match id number here'])}}
    </div> -->  
    <div class="form-group">
            {{Form::label('country', 'Country')}}
            {{Form::text('country', '', ['class' => 'form-control', 'placeholder' => 'Which country will win?'])}}
    </div> 
    <div class="form-group">
            {{Form::label('amount', 'Amount')}}
            {{Form::text('amount', '', ['class' => 'form-control', 'placeholder' => 'amount in euros'])}}
    </div>   

    {{Form::submit('Submit', ['class' => 'btn btn-primary submit_user'])}} 
{!! Form::close() !!}
</div>
@endsection