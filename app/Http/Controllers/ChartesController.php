<?php

namespace App\Http\Controllers;
use App\Chartes;
use Illuminate\Http\Request;

class ChartesController extends Controller
{
    public function index(){
        return view('admin.allchart');
    }
    public function store(Request $request){
        $chartes= new Chartes();
        $chartes->name = $request->input('non');
if($request->hasfile('chartes')){
    $file= $request->file('chartes');
    $extension=$file->getclientOriginalExtension();

    $filename= time() . '.' . $extension;
    $file=move('uploads/chartes/',$filename);
    $chartes->chartes=$filename;

}
else{
    return $request;
    $highlights->chartes='';
}
$chartes->save();
return view('chartes')->with('chartes',$chartes);
    }
}
