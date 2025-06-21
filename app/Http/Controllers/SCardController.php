<?php

namespace App\Http\Controllers;

use App\Models\SCard;
use Illuminate\Http\Request;

class SCardController extends Controller
{
    public function create()
    {
        return view('SCard.Form');
    }
    public function store(Request $request)
    {
        $scard = new SCard();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $scard->image = $imageName;
        }
        $scard->heading = $request->heading;
        $scard->paragraph = $request->paragraph;
        $scard->button = $request->button;
        $scard->save();
        return redirect()->route('table.SCard');
    }
    public function Table(){
        $scard = SCard::all();
        return view('SCard.Table',compact('scard'));
    }
    public function edit($id){
        $scard= SCard::find($id);
        return view('SCard.Edit',compact('scard'));
     }
     public function update(Request $request,$id){
        $scard = SCard::find($id);
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $scard->image = $imageName;
        }
        $scard->heading = $request->heading;
        $scard->paragraph = $request->paragraph;
        $scard->button = $request->button;
        $scard->update();
        return redirect()->route('table.SCard');
     }
     public function delete($id){
        $scard = SCard::find($id);
        $scard->delete();
        return redirect()->route('table.SCard');
     }
}




