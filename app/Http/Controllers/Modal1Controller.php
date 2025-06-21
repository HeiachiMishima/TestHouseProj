<?php

namespace App\Http\Controllers;

use App\Models\Modal1;
use Illuminate\Http\Request;

class Modal1Controller extends Controller
{ 
    public function create()
    {
        return view('Modal1.Form');
    }
    public function store(Request $request)
    {
        $modal1 = new Modal1();
        $modal1->heading = $request->heading;
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $modal1->image = $imageName;
        }
        $modal1->paragraph = $request->paragraph;
        $modal1->save();
        return redirect()->route('table.Modal1');
    }
    public function Table(){
        $modal1 = Modal1::all();
        return view('Modal1.Table',compact('modal1'));
    }
    public function edit($id){
        $modal1= Modal1::find($id);
        return view('Modal1.Edit',compact('modal1'));
     }
     public function update(Request $request,$id){
        $modal1 = Modal1::find($id);
        $modal1->heading = $request->heading;
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $modal1->image = $imageName;
        }
        $modal1->paragraph = $request->paragraph;
        $modal1->update();
        return redirect()->route('table.Modal1');
     }
     public function delete($id){
        $modal1 = Modal1::find($id);
        $modal1->delete();
        return redirect()->route('table.Modal1');
     }
}




