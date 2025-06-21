<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('Contact.Form');
    }
    public function store(Request $request)
    {
        $contact = new Contact();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $contact->image = $imageName;
        }
        $contact->heading1 = $request->heading1;
        $contact->heading2 = $request->heading2;
        $contact->heading3 = $request->heading3;
        $contact->paragraph1 = $request->paragraph1;
        $contact->heading4 = $request->heading4;
        $contact->paragraph2 = $request->paragraph2;
        $contact->paragraph3 = $request->paragraph3;
        $contact->paragraph4 = $request->paragraph4;
        $contact->heading5 = $request->heading5;
        $contact->button = $request->button;
        $contact->save();
        return redirect()->route('table.Contact');
    }
    public function Table(){
        $contact =Contact::all();
        return view('Contact.Table',compact('contact'));
    }
    public function edit($id){
        $contact=Contact::find($id);
        return view('Contact.Edit',compact('contact'));
     }
     public function update(Request $request,$id){
        $contact = Contact::find($id);
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $contact->image = $imageName;
        }
        $contact->heading1 = $request->heading1;
        $contact->heading2 = $request->heading2;
        $contact->heading3 = $request->heading3;
        $contact->paragraph1 = $request->paragraph1;
        $contact->heading4 = $request->heading4;
        $contact->paragraph2 = $request->paragraph2;
        $contact->paragraph3 = $request->paragraph3;
        $contact->paragraph4 = $request->paragraph4;
        $contact->heading5 = $request->heading5;
        $contact->button = $request->button;
        $contact->update();
        return redirect()->route('table.Contact');
     }
     public function delete($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('table.Contact');
     }
}




