@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" width="500px" height="400px">
                <div class="card-body">Hello Administrator!
                    <h5><strong><span class="adminq">What would you like to manage?</span></strong></h5>
                </div>    

                <div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="flex-admin">
                            <a href="./users">USERS</a>
                            <a href="./matches">MATCHES</a>
                            <a href="./teams">TEAMS</a>
                            <a href="./players">PLAYERS</a>
                            <a href="./bets">BETS</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="title m-b-md admin_title">
    <strong>FOOTBET </strong> 
 </div>
@endsection
