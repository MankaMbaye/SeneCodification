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
use Illuminate\Support\Facades\DB;

class EtageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    
    /**$batiments= Batiment::all();

        /**$contraintesexes= Contraintesexe::all();
        $contraintes= Contrainte::all();
        $contrainteformations= Contrainteformation::all();*/



    $etages = DB::table('etages')
        ->leftjoin('contraintes', 'etages.contrainteniveau_id', '=', 'contraintes.id')
        ->leftjoin('contrainteformations', 'etages.contrainteformation_id', '=', 'contrainteformations.id')
        ->leftjoin('contraintesexes','etages.contraintesexe_id','=','contraintesexes.id')
        ->leftjoin('batiments','etages.batiment_id','=','batiments.id')
        ->select('etages.id','etages.numeroEtage', 'etages.nbreChambres', 'contraintes.valeur as contrainte_valeur', 'contraintes.id as contrainteniveau_id','etages.nbrePlaceRestantes','contrainteformations.valeur as contrainteformation_valeur',
            'contrainteformations.id as contrainteformation_id','batiments.id as batiment_id','batiments.nom as batiment_nom','contraintesexes.valeur as contraintesexe_valeur',
            'contraintesexes.id as contraintesexe_id')->get();





        
         return view('admin.etages.index', ['etages' => $etages]);



       /** return view('admin.etages.index',compact('etages'))->with('batiments',$batiments)->with('contraintesexes',$contraintesexes)->with('contrainteformations',$contrainteformations)->with('contraintes',$contraintes);*/
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

            'numeroEtage' => 'required|unique:etages',

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

        $etageCompts = DB::table('etages')
        ->leftjoin('contraintes', 'etages.contrainteniveau_id', '=', 'contraintes.id')
        ->leftjoin('contrainteformations', 'etages.contrainteformation_id', '=', 'contrainteformations.id')
        ->leftjoin('contraintesexes','etages.contraintesexe_id','=','contraintesexes.id')
        ->leftjoin('batiments','etages.batiment_id','=','batiments.id')
        ->select('etages.id','etages.numeroEtage', 'etages.nbreChambres', 'contraintes.valeur as contrainte_valeur', 'contraintes.id as contrainteniveau_id','etages.nbrePlaceRestantes','contrainteformations.valeur as contrainteformation_valeur',
            'contrainteformations.id as contrainteformation_id','batiments.id as batiment_id','batiments.nom as batiment_nom','contraintesexes.valeur as contraintesexe_valeur',
            'contraintesexes.id as contraintesexe_id')->where('etages.id',$id)->get();

        return view('admin.etages.show',compact('etage'))->with('etageCompts',$etageCompts);
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
