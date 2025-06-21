<?php

namespace App\Http\Controllers;

use App\Models\Stats;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function create()
    {
        return view('Stats.Form');
    }
    public function store(Request $request)
    {
        $stats = new Stats();
        $stats->heading1 = $request->heading1;
        $stats->heading2 = $request->heading2;
        $stats->paragraph = $request->paragraph;
        $stats->button = $request->button;
        $stats->save();
        return redirect()->route('table.Stats');
    }
    public function Table(){
        $stats = Stats::all();
        return view('Stats.Table',compact('stats'));
    }
    public function edit($id){
        $stats= Stats::find($id);
        return view('Stats.Edit',compact('stats'));
     }
     public function update(Request $request,$id){
        $stats = Stats::find($id);
        $stats->heading1 = $request->heading1;
        $stats->heading2 = $request->heading2;
        $stats->paragraph = $request->paragraph;
        $stats->button = $request->button;
        $stats->update();
        return redirect()->route('table.Stats');
     }
     public function delete($id){
        $stats = Stats::find($id);
        $stats->delete();
        return redirect()->route('table.Stats');
     }
}




