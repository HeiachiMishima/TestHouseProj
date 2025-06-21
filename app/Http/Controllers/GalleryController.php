<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function create()
    {
        return view('Gallery.Form');
    }
    public function store(Request $request)
    {
        $gallery = new Gallery();
        $gallery->heading1 = $request->heading1;
        $gallery->heading2 = $request->heading2;
        $gallery->save();
        return redirect()->route('table.Gallery');
    }
    public function Table(){
        $gallery = Gallery::all();
        return view('Gallery.Table',compact('gallery'));
    }
    public function edit($id){
        $gallery= Gallery::find($id);
        return view('Gallery.Edit',compact('gallery'));
     }
     public function update(Request $request,$id){
        $gallery = Gallery::find($id);
        $gallery->heading1 = $request->heading1;
        $gallery->heading2 = $request->heading2;
        $gallery->update();
        return redirect()->route('table.Gallery');
     }
     public function delete($id){
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect()->route('table.Gallery');
     }
}






