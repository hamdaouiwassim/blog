<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App \Groupes;
use Validator;
class Groupescontroller extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('groupes.index' );

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groupes.create');
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
            'name'=>'required',
        
     
        ]);

        Groupes::create($request->all());
        return redirect()->route('groupes.index')->
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

        $groupes=Groupes::findOrFail($id);
        return view('groupes.edit',compact('groupes'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_groupes)
    {
        $request->validate([
         
           'name'=>'required'
       
        ]);
        Groupes::findOrFail($id)->update($request->all());
        return redirect()->route('groupes.index')->with('success',
        'Groupe updated successfully');

        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Groupes::findOrFail($id)->delete();
        return redirect()->route('groupes.index')->with('success',
        'Groupe deleted successfully');
    }
}
