@extends('layouts.app')

@section('content')
<a href="/users" class="btn btn-default go_back">Go Back</a>
<br/><br/>
<h2>Add a user</h2>
<div class="container user_form">
{!! Form::open(['action' => 'UsersController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'First Last'])}}
    </div>   
    <div class="form-group">
            {{Form::label('type', 'Type of User')}}
            {{Form::text('type', '', ['class' => 'form-control', 'placeholder' => 'admin or default'])}}
    </div> 
    <div class="form-group">
            {{Form::label('email', 'E-mail')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'user@example.com'])}}
    </div> 
    <div class="form-group">
            {{Form::label('password', 'Password')}}
            {{Form::text('password', '', ['class' => 'form-control', 'placeholder' => ''])}}
    </div>     

    {{Form::submit('Submit', ['class' => 'btn btn-primary submit_user'])}} 
{!! Form::close() !!}
</div>
@endsection