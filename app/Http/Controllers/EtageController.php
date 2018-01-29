<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etage;
use App\Batiment;
use App\Http\Requests\EtageRequest;
use App\Http\Controllers\EtageController;


use App\Contraintesexe;
use App\Contrainteformation;
use App\Contrainte;

class EtageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $etages= Etage::all();
        $batiments= Batiment::all();

        $contraintesexes= Contraintesexe::all();
        $contraintes= Contrainte::all();
        $contrainteformations= Contrainteformation::all();

        return view('admin.etages.index',compact('etages'))->with('batiments',$batiments)->with('contraintesexes',$contraintesexes)->with('contrainteformations',$contrainteformations)->with('contraintes',$contraintes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batiments=Batiment::all();

        $contraintesexes= Contraintesexe::all();
        $contraintes= Contrainte::all();
        $contrainteformations= Contrainteformation::all();
        return view('admin.etages.create')->with('batiments',$batiments)->with('contraintesexes',$contraintesexes)->with('contrainteformations',$contrainteformations)->with('contraintes',$contraintes);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EtageRequest $request)
    {
        


        $this->validate($request, [

            'numeroEtage' => 'required',

            'batiment_id' => 'required',

            'nbreChambres' => 'required',

        ]);


        Etage::create($request->all());

        return redirect()->route('etage.index')

                        ->with('success','Etage created successfully');


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etage = Etage::find($id);

        return view('admin.etages.show',compact('etage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $batiments= Batiment::all();

        $etage = Etage::find($id);

        $contraintesexes= Contraintesexe::all();
        $contraintes= Contrainte::all();
        $contrainteformations= Contrainteformation::all();

        return view('admin.etages.edit',compact('etage'))->with('batiments',$batiments)->with('contraintesexes',$contraintesexes)->with('contrainteformations',$contrainteformations)->with('contraintes',$contraintes);;
        
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


            $this->validate($request, [

           'numeroEtage' => 'required',

            'batiment_id' => 'required',

            'nbreChambres' => 'required',

        ]);


        Etage::find($id)->update($request->all());

        return redirect()->route('etage.index')

                        ->with('success','Etage updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Etage::find($id)->delete();

        return redirect()->route('etage.index')

                        ->with('success','Etage deleted successfully');
    }
}
