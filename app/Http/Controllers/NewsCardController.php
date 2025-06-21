<?php

namespace App\Http\Controllers;

use App\Models\NewsCard;
use Illuminate\Http\Request;

class NewsCardController extends Controller
{
    public function create()
    {
        return view('NewsCard.Form');
    }
    public function store(Request $request)
    {
        $newscard = new NewsCard();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $newscard->image = $imageName;
        }
        $newscard->date = $request->date;
        $newscard->heading = $request->heading;
        $newscard->paragraph = $request->paragraph;
        $newscard->button = $request->button;
        $newscard->save();
        return redirect()->route('table.NewsCard');
    }
    public function Table(){
        $newscard = NewsCard::all();
        return view('NewsCard.Table',compact('newscard'));
    }
    public function edit($id){
        $newscard= NewsCard::find($id);
        return view('NewsCard.Edit',compact('newscard'));
     }
     public function update(Request $request,$id){
        $newscard = NewsCard::find($id);
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $newscard->image = $imageName;
        }
        $newscard->date = $request->date;
        $newscard->heading = $request->heading;
        $newscard->paragraph = $request->paragraph;
        $newscard->button = $request->button;
        $newscard->update();
        return redirect()->route('table.NewsCard');
     }
     public function delete($id){
        $newscard = NewsCard::find($id);
        $newscard->delete();
        return redirect()->route('table.NewsCard');
     }
}





