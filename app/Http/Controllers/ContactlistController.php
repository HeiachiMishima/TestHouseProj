<?php

namespace App\Http\Controllers;

use App\Models\Contactlist;
use Illuminate\Http\Request;

class ContactlistController extends Controller
{
    public function store(Request $request)
    {
        $contactlist = new Contactlist();
        $contactlist->name = $request->name;
        $contactlist->email = $request->email;
        $contactlist->message = $request->message;
        $contactlist->save();
        return redirect()->back();
    }
    public function Table(){
        $contactlist = Contactlist::all();
        return view('Contactlist.Table',compact('contactlist'));
    }
    public function edit($id){
        $contactlist= Contactlist::find($id);
        return view('Contactlist.Edit',compact('contactlist'));
     }
     public function update(Request $request,$id){
        $contactlist = Contactlist::find($id);
        $contactlist->name = $request->name;
        $contactlist->email = $request->email;
        $contactlist->message = $request->message;
        $contactlist->update();
        return redirect()->route('table.Contactlist');
     }
     public function delete($id){
        $contactlist = Contactlist::find($id);
        $contactlist->delete();
        return redirect()->route('table.Contactlist');
     }
}






