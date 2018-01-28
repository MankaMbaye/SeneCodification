<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Batiment;

use App\Http\Requests\BatimentRequest;
use App\Http\Controllers\BatimentController;

use App\Contraintesexe;
use App\Contrainteformation;
use App\Contrainte;

class BatimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $batiments= Batiment::all();
        $contraintesexes= Contraintesexe::all();
        $contraintes= Contrainte::all();
        $contrainteformations= Contrainteformation::all();
        
        return view('admin.batiments.index',compact('batiments'))->with('contraintesexes',$contraintesexes)->with('contraintes',$contraintes)->with('contrainteformations',$contrainteformations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contraintesexes= Contraintesexe::all();
        $contraintes= Contrainte::all();
        $contrainteformations= Contrainteformation::all();

        return view('admin.batiments.create')->with('contraintesexes',$contraintesexes)->with('contrainteformations',$contrainteformations)->with('contraintes',$contraintes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BatimentRequest $request)
    {
        





        $this->validate($request, [

            'nom' => 'required',

            'datecreation' => 'required',

        ]);


        Batiment::create($request->all());

        return redirect()->route('batiment.index')

                        ->with('success','Batiment created successfully');






        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $batiment = Batiment::find($id);

        $contraintesexes= Contraintesexe::all();
        $contraintes= Contrainte::all();
        $contrainteformations= Contrainteformation::all();

        return view('admin.batiments.show',compact('batiment'))->with('contraintesexes',$contraintesexes)->
        with('contrainteformations',$contrainteformations)->with('contraintes',$contraintes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $batiment = Batiment::find($id);

        $contraintesexes= Contraintesexe::all();
        $contraintes= Contrainte::all();
        $contrainteformations= Contrainteformation::all();

        return view('admin.batiments.edit',compact('batiment'))->with('contraintesexes',$contraintesexes)->
        with('contrainteformations',$contrainteformations)->with('contraintes',$contraintes);
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

            'nom' => 'required',

            'datecreation' => 'required',

        ]);


        Batiment::find($id)->update($request->all());

        return redirect()->route('batiment.index')

                        ->with('success','Batiment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Batiment::find($id)->delete();

        

        return redirect()->route('batiment.index')

                        ->with('success','Batiment deleted successfully');
    }
}
