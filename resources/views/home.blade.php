@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">You are logged in. <strong> You may now place a bet! <hr>Go To MATCHES ...</strong>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="content welcome">
            <div class="title m-b-md">
               <strong>FOOTBET </strong> <hr/>
            </div>
            <div class="links flex-center">
                <a href="./matches">MATCHES</a>
                <a href="./teams">TEAMS</a>
                <a href="./players">PLAYERS</a>
                <a href="./bets">BETS!</a>
            </div>
        </div>
</div>
@endsection
