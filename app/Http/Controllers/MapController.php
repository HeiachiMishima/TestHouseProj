<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function create()
    {
        return view('Map.Form');
    }
    public function store(Request $request)
    {
        $map = new Map();
        $map->text1 = $request->text1;
        $map->text2 = $request->text2;
        $map->save();
        return redirect()->route('table.Map');
    }
    public function Table(){
        $map = Map::all();
        return view('Map.Table',compact('map'));
    }
    public function edit($id){
        $map= Map::find($id);
        return view('Map.Edit',compact('map'));
     }
     public function update(Request $request,$id){
        $map = Map::find($id);
        $map->text1 = $request->text1;
        $map->text2 = $request->text2;
        $map->update();
        return redirect()->route('table.Map');
     }
     public function delete($id){
        $map = Map::find($id);
        $map->delete();
        return redirect()->route('table.Map');
     }
}







