<?php

namespace App\Http\Controllers;

use App\Models\Contactform2;
use Illuminate\Http\Request;

class Contactform2Controller extends Controller
{
    public function create()
    {
        return view('Contactform2.Form');
    }
    public function store(Request $request)
    {
        $contactform2 = new Contactform2();
        $contactform2->heading = $request->heading;
        $contactform2->text1 = $request->text1;
        $contactform2->text2 = $request->text2;
        $contactform2->save();
        return redirect()->route('table.Contactform2');
    }
    public function Table(){
        $contactform2 = Contactform2::all();
        return view('Contactform2.Table',compact('contactform2'));
    }
    public function edit($id){
        $contactform2= Contactform2::find($id);
        return view('Contactform2.Edit',compact('contactform2'));
     }
     public function update(Request $request,$id){
        $contactform2 = Contactform2::find($id);
        $contactform2->heading = $request->heading;
        $contactform2->text1 = $request->text1;
        $contactform2->text2 = $request->text2;
        $contactform2->update();
        return redirect()->route('table.Contactform2');
     }
     public function delete($id){
        $contactform2 = Contactform2::find($id);
        $contactform2->delete();
        return redirect()->route('table.Contactform2');
     }
}






