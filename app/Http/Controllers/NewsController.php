<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function create()
    {
        return view('News.Form');
    }
    public function store(Request $request)
    {
        $news = new News();
        $news->heading1 = $request->heading1;
        $news->heading2 = $request->heading2;
        $news->save();
        return redirect()->route('table.News');
    }
    public function Table(){
        $news = News::all();
        return view('News.Table',compact('news'));
    }
    public function edit($id){
        $news= News::find($id);
        return view('News.Edit',compact('news'));
     }
     public function update(Request $request,$id){
        $news = News::find($id);
        $news->heading1 = $request->heading1;
        $news->heading2 = $request->heading2;
        $news->update();
        return redirect()->route('table.News');
     }
     public function delete($id){
        $news = News::find($id);
        $news->delete();
        return redirect()->route('table.News');
     }
}






