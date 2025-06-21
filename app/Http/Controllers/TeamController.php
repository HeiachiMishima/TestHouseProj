<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function create()
    {
        return view('Team.Form');
    }
    public function store(Request $request)
    {
        $team = new Team();
        $team->heading1 = $request->heading1;
        $team->heading2 = $request->heading2;
        $team->save();
        return redirect()->route('table.Team');
    }
    public function Table(){
        $team = Team::all();
        return view('Team.Table',compact('team'));
    }
    public function edit($id){
        $team= Team::find($id);
        return view('Team.Edit',compact('team'));
     }
     public function update(Request $request,$id){
        $team = Team::find($id);
        $team->heading1 = $request->heading1;
        $team->heading2 = $request->heading2;
        $team->update();
        return redirect()->route('table.Team');
     }
     public function delete($id){
        $team = Team::find($id);
        $team->delete();
        return redirect()->route('table.Team');
     }
}






