<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('name', 'asc')->paginate(20);
        return view('users')->with('users', $users);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users_create');
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
        
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);

        //create new user in database
        $user = new User;  
        //$user::create(Request::all());      
    
        $user->name = $request->input('name');    
        $user->type = $request->input('type');        
        $user->email = $request->input('email');        
        $user->password = bCrypt(request('password')); 
        $user->save();

        return redirect()->route('users')->with('success', 'A new user has been added.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('user')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        //dd($user);
        return view('user_edit')->with('user', $user);
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
        $this->validate($request, [
        
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

    //create new user in database
    $user = User::find($id);  
    //$user::create(Request::all());      

    $user->name = $request->input('name');    
    $user->type = $request->input('type');        
    $user->email = $request->input('email');        
    $user->password = bCrypt(request('password')); 
    $user->save();

    return redirect()->route('users')->with('success', 'User ' . $user->id . ' has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('users')->with('success', 'User ' . $user->name . ' has been deleted.');
    }
}
