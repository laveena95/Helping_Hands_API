<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('team.teamDetail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Team();
        $data->name = $request->input('name');
        $data->country = $request->input('country');
        $data->state = $request->input('state');
        $data->city = $request->input('city');
        $data->lane = $request->input('lane');
        $data->startup = $request->input('startup');
        $data->countryS = $request->input('countryS');
        $data->stateS = $request->input('stateS');
        $data->cityS = $request->input('cityS');
        $data->phone = $request->input('phone');
        $data->mobile = $request->input('mobile');
        $data->email = $request->input('email');
        $data->website = $request->input('website');
        if($request->file('proof')){
            $file = $request->file('proof');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/Team/Proof/',$filename);
            $data->cv=$filename;
        }
        $data->team_id=Auth::id();
        $data->save();

        return redirect()->back()->with('success','Congradulations you have Joined as Organization to Helping Hands!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
