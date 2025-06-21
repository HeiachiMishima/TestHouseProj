<?php

namespace App\Http\Controllers;

use App\Models\GCard;
use Illuminate\Http\Request;

class GCardController extends Controller
{
    public function create()
    {
        return view('GCard.Form');
    }
    public function store(Request $request)
    {
        $gcard = new GCard();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $gcard->image = $imageName;
        }
        $gcard->name = $request->name;
        $gcard->save();
        return redirect()->route('table.GCard');
    }
    public function Table(){
        $gcard = GCard::all();
        return view('GCard.Table',compact('gcard'));
    }
    public function edit($id){
        $gcard= GCard::find($id);
        return view('GCard.Edit',compact('gcard'));
     }
     public function update(Request $request,$id){
        $gcard = GCard::find($id);
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $gcard->image = $imageName;
        }
        $gcard->name = $request->name;
        $gcard->update();
        return redirect()->route('table.GCard');
     }
     public function delete($id){
        $gcard = GCard::find($id);
        $gcard->delete();
        return redirect()->route('table.GCard');
     }
}






