<?php

namespace App\Http\Controllers;

use App\Models\TCard;
use Illuminate\Http\Request;

class TCardController extends Controller
{
    public function create()
    {
        return view('TCard.Form');
    }
    public function store(Request $request)
    {
        $tcard = new TCard();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $tcard->image = $imageName;
        }
        $tcard->name = $request->name;
        $tcard->text = $request->text;
        $tcard->paragraph = $request->paragraph;
        $tcard->save();
        return redirect()->route('table.TCard');
    }
    public function Table(){
        $tcard = TCard::all();
        return view('TCard.Table',compact('tcard'));
    }
    public function edit($id){
        $tcard= TCard::find($id);
        return view('TCard.Edit',compact('tcard'));
     }
     public function update(Request $request,$id){
        $tcard = TCard::find($id);
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $tcard->image = $imageName;
        }
        $tcard->name = $request->name;
        $tcard->text = $request->text;
        $tcard->paragraph = $request->paragraph;
        $tcard->update();
        return redirect()->route('table.TCard');
     }
     public function delete($id){
        $tcard = TCard::find($id);
        $tcard->delete();
        return redirect()->route('table.TCard');
     }
}





