<?php

namespace App\Http\Controllers;
use App\CsvData;
use App\ContentPage;
use App\Mail\sendEmail;
use App\Groupe;
use App\Client;
use App\Historique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class AdminController extends Controller
{
    //
    public function envoiForm(){
        $groupes = Groupe::all();
        $chartes = ContentPage::all();
        return view('admin.envoi')->with('chartes',$chartes)->with('groupes',$groupes);
    }

    public function sendEmail(Request $request)
    {
        $groupeid = $request->input('groupe');
        $messageSub = $request->input('message');
        //echo $groupeid;
        $emails = Client::where('idgroupe',$groupeid)->get();
        //var_dump($emails);
        //echo count($emails);
        $chartid = $request->input('chart');
        $chart = ContentPage::find($chartid);
        $mailto="";
        foreach($emails as $email){
            //dd($emails);
            $mailto = $email->email;
            Mail::send('admin.mail', ['chart' => $chart], function ($message) use ($mailto,$messageSub){
                $message->to($mailto);
                $message->subject($messageSub);
                });
            $his = new Historique();
            $his->chartId = $chartid;
            $his->clientId = $email->id;
            $his->groupeId =$groupeid ;
            $his->message = $messageSub;
            $his->type = "groupe";
            $his->state = "send";
            $his->save();
                
        }
        return redirect('/compagnes');
        //return view('admin.mail')->with('chart',$chart);

       
    //Mail::to('hamdaouiwassim@gmail.com')->send(new sendEmail());
    
    
    //return "email envoyé\n<br>";
    }
    public function compagnes(){
        $chartes     = ContentPage::all();
        $historiques = Historique::all();
        $clients = Client::all();
        return view('admin.compagnes')->with('clients',$clients)->with('chartes',$chartes)->with('historiques',$historiques);
    }
    public function importForm(){
        $chartes = ContentPage::all();
        return view('admin.importcsv')->with('chartes',$chartes);
    }
    public function importParse(Request $request){
        $path = $request->file('emailscsv')->getRealPath();
        $data = array_map('str_getcsv',file($path));
       
        $groupeid = $request->input('groupe');
        $messageSub = $request->input('message');
        //echo $groupeid;
        $emails = Client::where('idgroupe',$groupeid)->get();
        //var_dump($emails);
        //echo count($emails);
        $chartid = $request->input('chart');
        $chart = ContentPage::find($chartid);
        $mailto="";
        foreach($data as $email){
            //dd($emails);
            $mailto = $email[0];
            Mail::send('admin.mail', ['chart' => $chart], function ($message) use ($mailto,$messageSub){
                $message->to($mailto);
                $message->subject($messageSub);
                });
            $his = new Historique();
            $his->chartId = $chartid;
            $his->clientId = NULL;
            $his->groupeId =NULL ;
            $his->message = $messageSub;
            $his->state = "send";
            $his->type = "csv file";
            $his->email = $mailto;
            $his->save();
                
        }
        return redirect('/compagnes');
        //dd($data);

    }
    public function statistiques(){
        $chartes = ContentPage::all();
        $stat = array();

        //$stat[] = array();
        foreach( $chartes as $chart ){
                
                //$stat[][];
        }
        

        return view('admin.statistiques')->with('chartes',$chartes);
    }
}
