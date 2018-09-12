<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use DB;
class MatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' =>['teams', 'team', 'matches', 'players', 'welcome', 'home']]);
    } 

    public function index()
    {
        $matches = Match::orderBy('date', 'asc')->paginate(20);
        return view('matches')->with('matches', $matches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matches_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
        
            'team1' => 'required',
            'team2' => 'required',
            'date' => 'required',
            'time' => 'required',

        ]);

    //create new match in database
    $match = new Match;       

    $match->team1 = $request->input('team1');    
    $match->team2 = $request->input('team2');        
    $match->date = $request->input('date');        
    $match->time = $request->input('time'); 
    $match->save();

    return redirect()->route('matches')->with('success', 'A new match has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($match_id)
    {
        $match = Match::find($match_id);
        return view('match')->with('match', $match);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $match = Match::find($id);
        return view('match_edit')->with('match', $match);
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
                'team1' => 'required',
                'team2' => 'required',
                'date' => '',
                'time' => '',
                'goals1' => '',
                'goals2' => '',
            ]);

        $match = Match::find($id);  
             
        $match->team1 = $request->input('team1');    
        $match->team2 = $request->input('team2');        
        $match->date = $request->input('date');        
        $match->time = $request->input('time'); 
        $match->goals1 = $request->input('goals1'); 
        $match->goals2 = $request->input('goals2'); 
        
        $match->save();

        return redirect()->route('matches')->with('success', 'Match ' . $match->match_id . ' has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $match = Match::find($id);
        $match->delete();
        return redirect('matches')->with('success', 'The match ' . $match->team1 . ' VS. ' . $match->team2 . ' has been deleted.');
    }
}
