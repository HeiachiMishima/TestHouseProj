<?php

namespace App\Http\Controllers;

use App\Models\Modal2;
use Illuminate\Http\Request;

class Modal2Controller extends Controller
{
    public function create()
    {
        return view('Modal2.Form');
    }
    public function store(Request $request)
    {
        $modal2 = new Modal2();
        $modal2->heading = $request->heading;
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $modal2->image = $imageName;
        }
        $modal2->paragraph = $request->paragraph;
        $modal2->save();
        return redirect()->route('table.Modal2');
    }
    public function Table(){
        $modal2 = Modal2::all();
        return view('Modal2.Table',compact('modal2'));
    }
    public function edit($id){
        $modal2= Modal2::find($id);
        return view('Modal2.Edit',compact('modal2'));
     }
     public function update(Request $request,$id){
        $modal2 = Modal2::find($id);
        $modal2->heading = $request->heading;
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $modal2->image = $imageName;
        }
        $modal2->paragraph = $request->paragraph;
        $modal2->update();
        return redirect()->route('table.Modal2');
     }
     public function delete($id){
        $modal2 = Modal2::find($id);
        $modal2->delete();
        return redirect()->route('table.Modal2');
     }
}





