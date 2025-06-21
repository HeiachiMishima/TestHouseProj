<?php

namespace App\Http\Controllers;

use App\Models\GButton;
use Illuminate\Http\Request;

class GButtonController extends Controller
{
    public function create()
    {
        return view('GButton.Form');
    }
    public function store(Request $request)
    {
        $gbutton = new GButton();
        $gbutton->heading1 = $request->heading1;
        $gbutton->heading2 = $request->heading2;
        $gbutton->save();
        return redirect()->route('table.GButton');
    }
    public function Table(){
        $gbutton = GButton::all();
        return view('GButton.Table',compact('gbutton'));
    }
    public function edit($id){
        $gbutton= GButton::find($id);
        return view('GButton.Edit',compact('gbutton'));
     }
     public function update(Request $request,$id){
        $gbutton = GButton::find($id);
        $gbutton->heading1 = $request->heading1;
        $gbutton->heading2 = $request->heading2;
        $gbutton->update();
        return redirect()->route('table.GButton');
     }
     public function delete($id){
        $gbutton = GButton::find($id);
        $gbutton->delete();
        return redirect()->route('table.GButton');
     }
}






