<?php

namespace App\Http\Controllers;

use App\Models\CarousalImage;
use Illuminate\Http\Request;

class CarousalImageController extends Controller
{
    public function create()
    {
        return view('CarousalImage.Form');
    }
    public function store(Request $request)
    {
        $carousalimage = new CarousalImage();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $carousalimage->image = $imageName;
        }
        $carousalimage->save();
        return redirect()->route('table.CarousalImage');
    }
    public function Table(){
        $carousalimage = CarousalImage::all();
        return view('CarousalImage.Table',compact('carousalimage'));
    }
    public function edit($id){
        $carousalimage= CarousalImage::find($id);
        return view('CarousalImage.Edit',compact('carousalimage'));
     }
     public function update(Request $request,$id){
        $carousalimage = CarousalImage::find($id);
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $carousalimage->image = $imageName;
        }
        $carousalimage->update();
        return redirect()->route('table.CarousalImage');
     }
     public function delete($id){
        $carousalimage = CarousalImage::find($id);
        $carousalimage->delete();
        return redirect()->route('table.CarousalImage');
     }
}







