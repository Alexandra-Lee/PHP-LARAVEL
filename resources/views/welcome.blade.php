@extends ('layouts.app');


@section ('content');
    <div class="content welcome">
        <div class="title m-b-md">
           <strong>FOOTBET </strong> <hr/>
        </div>
        <div class="links flex-center">
            <a href="./matches">MATCHES</a>
            <a href="./teams">TEAMS</a>
            <a href="./players">PLAYERS</a>
            <a href="/login">BETS!</a>
        </div>
    </div>
@endsection
