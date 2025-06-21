<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create()
    {
        return view('Home.Form');
    }
    public function store(Request $request)
    {
        $home = new Home();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $home->image = $imageName;
        }
        $home->heading = $request->heading;
        $home->paragraph = $request->paragraph;
        $home->save();
        return redirect()->route('table.Home');
    }
    public function Table(){
        $home = Home::all();
        return view('Home.Table',compact('home'));
    }
    public function edit($id){
        $home= Home::find($id);
        return view('Home.Edit',compact('home'));
     }
     public function update(Request $request,$id){
        $home = Home::find($id);
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $home->image = $imageName;
        }
        $home->heading = $request->heading;
        $home->paragraph = $request->paragraph;
        $home->update();
        return redirect()->route('table.home');
     }
     public function delete($id){
        $home = Home::find($id);
        $home->delete();
        return redirect()->route('table.Home');
     }
}




