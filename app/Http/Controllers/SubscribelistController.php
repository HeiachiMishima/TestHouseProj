<?php

namespace App\Http\Controllers;

use App\Models\Subscribelist;
use Illuminate\Http\Request;

class SubscribelistController extends Controller
{
    public function store(Request $request)
    {
        $subscribelist = new Subscribelist();
        $subscribelist->name = $request->name;
        $subscribelist->email = $request->email;
        $subscribelist->save();
        return redirect()->back();
    }
    public function Table(){
        $subscribelist = Subscribelist::all();
        return view('Subscribelist.Table',compact('subscribelist'));
    }
    public function edit($id){
        $subscribelist= Subscribelist::find($id);
        return view('Subscribelist.Edit',compact('subscribelist'));
     }
     public function update(Request $request,$id){
        $subscribelist = Subscribelist::find($id);
        $subscribelist->name = $request->name;
        $subscribelist->email = $request->email;
        $subscribelist->update();
        return redirect()->route('table.Subscribelist');
     }
     public function delete($id){
        $subscribelist = Subscribelist::find($id);
        $subscribelist->delete();
        return redirect()->route('table.Subscribelist');
     }
}







