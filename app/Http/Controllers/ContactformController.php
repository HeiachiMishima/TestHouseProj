<?php

namespace App\Http\Controllers;

use App\Models\Contactform;
use Illuminate\Http\Request;

class ContactformController extends Controller
{
    public function create()
    {
        return view('Contactform.Form');
    }
    public function store(Request $request)
    {
        $contactform = new Contactform();
        $contactform->heading = $request->heading;
        $contactform->text1 = $request->text1;
        $contactform->text2 = $request->text2;
        $contactform->save();
        return redirect()->route('table.Contactform');
    }
    public function Table(){
        $contactform = Contactform::all();
        return view('Contactform.Table',compact('contactform'));
    }
    public function edit($id){
        $contactform= Contactform::find($id);
        return view('Contactform.Edit',compact('contactform'));
     }
     public function update(Request $request,$id){
        $contactform = Contactform::find($id);
        $contactform->heading = $request->heading;
        $contactform->text1 = $request->text1;
        $contactform->text2 = $request->text2;
        $contactform->update();
        return redirect()->route('table.Contactform');
     }
     public function delete($id){
        $contactform = Contactform::find($id);
        $contactform->delete();
        return redirect()->route('table.Contactform');
     }
}






