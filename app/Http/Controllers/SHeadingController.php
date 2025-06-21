<?php

namespace App\Http\Controllers;

use App\Models\SHeading;
use Illuminate\Http\Request;

class SHeadingController extends Controller
{
    public function create()
    {
        return view('SHeading.Form');
    }
    public function store(Request $request)
    {
        $sheading = new SHeading();
        $sheading->heading1 = $request->heading1;
        $sheading->heading2 = $request->heading2;
        $sheading->save();
        return redirect()->route('table.SHeading');
    }
    public function Table(){
        $sheading = SHeading::all();
        return view('SHeading.Table',compact('sheading'));
    }
    public function edit($id){
        $sheading= SHeading::find($id);
        return view('SHeading.Edit',compact('sheading'));
     }
     public function update(Request $request,$id){
        $sheading = SHeading::find($id);
        $sheading->heading1 = $request->heading1;
        $sheading->heading2 = $request->heading2;
        $sheading->update();
        return redirect()->route('table.SHeading');
     }
     public function delete($id){
        $sheading = SHeading::find($id);
        $sheading->delete();
        return redirect()->route('table.SHeading');
     }
}





