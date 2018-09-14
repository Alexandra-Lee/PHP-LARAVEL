<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use DB;
class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderBy('country', 'asc')->paginate(8);
        return view('teams')->with('teams', $teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$this->validate($request,
        $validation = $request->validate([

                'team_name' => 'required',
                'country' => 'required',
                'flag' => '',
                'yellow_cards' => '',
                'red_cards' => '',
                'goals' => '',
                'wins' => '',
                'total_matches' => ''
            ]);

        //create new team in database
        $team = new Team;
        //$team::create(Request::all());
        // if($request->hasfile('filename'))
        // {
        //    $file = $request->file('filename');
        //    $flag = $file->getClientOriginalName();
        //    $file->move(public_path().'/images/', $flag);
        //    $team->filename = $flag;
        // }
        $team->team_name = $request->input('team_name');
        $team->country = $request->input('country');
        $team->flag = $request->input('flag');
        $team->yellow_cards = $request->input('yellow_cards');
        $team->red_cards = $request->input('red_cards');
        $team->goals = $request->input('goals');
        $team->wins = $request->input('wins');
        $team->total_matches = $request->input('total_matches');

        $team->save();

        return redirect()->route('teams')->with('success', 'A new team has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $team = Team::find($id);
        //dd($team->players());
        return view('team')->with('team', $team);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::find($id);
        return view('team_edit')->with('team', $team);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'name' => 'required',
                'country' => 'required',
                'flag' => '',
                'yellow_cards' => '',
                'red_cards' => '',
                'goals' => '',
                'wins' => '',
                'total_matches' => '',

            ]);

        $team = Team::find($id);

        $team->team_name = $request->input('team_name');
        $team->country = $request->input('country');
        $team->flag = $request->input('flag');
        $team->yellow_cards = $request->input('yellow_cards');
        $team->red_cards = $request->input('red_cards');
        $team->goals = $request->input('goals');
        $team->wins = $request->input('wins');
        $team->total_matches = $request->input('total_matches');

        $team->save();

        return redirect()->route('teams')->with('success', 'Team ' . $team->country . ' has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

