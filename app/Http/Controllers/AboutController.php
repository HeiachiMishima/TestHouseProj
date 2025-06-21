<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function create()
    {
        return view('About.Form');
    }
    public function store(Request $request)
    {
        $about = new About();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $about->image = $imageName;
        }
        $about->heading1 = $request->heading1;
        $about->heading2 = $request->heading2;
        $about->paragraph = $request->paragraph;
        $about->button = $request->button;
        $about->save();
        return redirect()->route('table.About');
    }
    public function Table(){
        $about = About::all();
        return view('About.Table',compact('about'));
    }
    public function edit($id){
        $about= About::find($id);
        return view('About.Edit',compact('about'));
     }
     public function update(Request $request,$id){
        $about = About::find($id);
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $about->image = $imageName;
        }
        $about->heading1 = $request->heading1;
        $about->heading2 = $request->heading2;
        $about->paragraph = $request->paragraph;
        $about->button = $request->button;
        $about->update();
        return redirect()->route('table.About');
     }
     public function delete($id){
        $about = About::find($id);
        $about->delete();
        return redirect()->route('table.About');
     }
}




