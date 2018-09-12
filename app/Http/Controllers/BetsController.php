<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bet;
class BetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bets = Bet::orderBy('match_id', 'asc')->paginate(20);
        return view('bets')->with('bets', $bets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bets_create');
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
        
            'country' => 'required',
            'amount' => 'required',
        ]);

    //create new bet in database
    $bet = new Bet;  
    
    $bet->country = $request->input('country');    
    $bet->amount = $request->input('amount');        
    
    $bet->save();

    return redirect()->route('matches')->with('success', 'You just placed a bet!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bet = Bet::find($id);
        $bet->delete();
        return redirect('matches')->with('success', 'Your bet on ' . $match->match_id . ' has been deleted.');
    }
}
