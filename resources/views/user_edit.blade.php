@extends('layouts.app')

@section('content')
<a href="/users/{{$user->id}}" class="btn btn-default go_back">Go Back</a>
<br/><br/>
<h2>EDIT a USER</h2>
<div class="container user_form">
{!! Form::open(['action' => ['UsersController@update', $user->id], 'method' => 'POST']) !!}
    <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'First Last'])}}
    </div>
    <div class="form-group">
            {{Form::label('type', 'Type of User')}}
            {{Form::text('type', $user->type, ['class' => 'form-control', 'placeholder' => 'admin or default'])}}
    </div>
    <div class="form-group">
            {{Form::label('email', 'E-mail')}}
            {{Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'user@example.com'])}}
    </div>
    <div class="form-group">
            {{Form::label('password', 'Password')}}
            {{Form::text('password', $user->password, ['class' => 'form-control', 'placeholder' => ''])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary submit_user'])}}
{!! Form::close() !!}
</div>
@endsection
