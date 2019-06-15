<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContentPage;

class ContentPageController extends Controller
{
   public function saveChart(Request $request){
       $chart = new ContentPage();
       $chart->name =$request->input('chartName');
       $chart->css = $request->input('csscode');
       $chart->html = $request->input('htmlcode');
       $chart->save();
       return redirect('/chart/list');

   }
   public function loadChart($id){
       $chart = ContentPage::find($id);
       return view('admin.loadChart')->with('chart',$chart);

   }
   public function listChart(){

            $chartes = ContentPage::all();
            return view('admin.allchart')->with('chartes',$chartes);
   }
   public function updateChart(Request $request){
    $chartid = $request->input('chartid');
    $chart = ContentPage::find($chartid);
    $chart->name =$request->input('chartName');
    $chart->css = $request->input('csscode');
    $chart->html = $request->input('htmlcode');
    $chart->save(); 
    $msg = "Changement effectue avec success";
    return view('admin.loadChart')->with('chart',$chart)->with('message',$msg);
   }

}
