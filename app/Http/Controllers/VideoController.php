<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function create(){
        return view('Video.Form');
    }
    public function store(Request $request){
       $crud = new Video();
       $video =$request->file('video');
       if($video) {
        $videoName = time() . '.' . $video->getClientOriginalExtension();
        $video->move('videos', $videoName);
        $crud->video = $videoName;
       }
       $crud->heading = $request->heading;
       $crud->paragraph = $request->paragraph;
       $crud->button = $request->button;
       $crud->save();
       return redirect()->route('table.Video');
    }
    public function Table(){
        $crud = Video::all();
        return view('Video.Table',compact('crud'));
    }
    public function edit($id){
        $crud = Video::find($id);
        return view('Video.Edit',compact('crud'));
     }
     public function update(Request $request,$id){
        $crud =  Video::find($id);
        $video = $request->file('video');
        if($video) {
         $videoName = time() . '.' . $video->getClientOriginalExtension();
         $video->move('videos', $videoName);
         $crud->video = $videoName;
        }
        $crud->heading = $request->heading;
        $crud->paragraph = $request->paragraph;
        $crud->button = $request->button;
        $crud->update();
        return redirect()->route('table.Video');
     }
     public function delete($id){
        $crud = Video::find($id);
        $crud->delete();
        return redirect()->route('table.Video');
     }
}
