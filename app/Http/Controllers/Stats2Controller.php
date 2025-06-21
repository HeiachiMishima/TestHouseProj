<?php

namespace App\Http\Controllers;

use App\Models\Stats2;
use Illuminate\Http\Request;

class Stats2Controller extends Controller
{
    public function create()
    {
        return view('Stats2.Form');
    }
    public function store(Request $request)
    {
        $stats2 = new Stats2();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $stats2->image = $imageName;
        }
        $stats2->counting = $request->counting;
        $stats2->info = $request->info;
        $stats2->save();
        return redirect()->route('table.Stats2');
    }
    public function Table(){
        $stats2 = Stats2::all();
        return view('Stats2.Table',compact('stats2'));
    }
    public function edit($id){
        $stats2= Stats2::find($id);
        return view('Stats2.Edit',compact('stats2'));
     }
     public function update(Request $request,$id){
        $stats2 = Stats2::find($id);
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $stats2->image = $imageName;
        }
        $stats2->counting = $request->counting;
        $stats2->info = $request->info;
        $stats2->update();
        return redirect()->route('table.Stats2');
     }
     public function delete($id){
        $stats2 = Stats2::find($id);
        $stats2->delete();
        return redirect()->route('table.Stats2');
     }
}




