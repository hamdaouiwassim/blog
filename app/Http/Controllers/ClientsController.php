<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App \clients;

use Illuminate\Database\Eloquent\Model;
class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Clients::all();
        return view('admin.clients.index' ,compact ('clients'));

   //$data['clients']= Client::paginate(10);
   //return view('clients.list',$clients);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $g=Groupes::all();
        return view('admin/clients.create',['g'=>$g]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request-> validate ([
            'fullname'=>'required',
            'email'=>'required',
            'gendre'=>'required',
            'age'=>'required',
        ]);

        Clients::create($request->all());
        return redirect()->route('admin.forms')->
        with('success','Great! Note created successuflly.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $client=Clients::findOrFail($id);
        return view('admin.clients.edit',compact('client'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fullname'=>'required',
            'email'=>'required',
            'gendre'=>'required',
            'age'=>'required',
        ]);
        Clients::findOrFail($id)->update($request->all());
        return redirect()->route('admin.forms')->with('success',
        'Product updated successfully');

        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Clients::findOrFail($id)->delete();
        return redirect()->route('admin.clients.index')->with('success',
        'Client deleted successfully');
    }
}
