<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Batiment;

use App\Etage;

use App\Couloir;


use App\Http\Controllers\CouloirController;

use App\Contraintesexe;
use App\Contrainteformation;
use App\Contrainte;

use App\Valcouloir;


use Illuminate\Support\Facades\DB;

class CouloirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        /**
        
        $couloirs = DB::table('couloirs')
        ->leftjoin('contraintes', 'couloirs.contrainteniveau_id', '=', 'couloirs.id')
        ->leftjoin('contrainteformations', 'couloirs.contrainteformation_id', '=', 'contrainteformations.id')
        ->leftjoin('batiments','couloirs.batiment_id','=','batiments.id')
        ->leftjoin('etages','couloirs.etage_id','=','etages.id')
        ->leftjoin('valcouloirs','couloirs.id','=','valcouloirs.id')
        ->select('couloirs.id','couloirs.nbreChambres','couloirs.valeur', 'contraintes.valeur as contrainte_valeur', 'contraintes.id as contrainteniveau_id','contrainteformations.valeur as contrainteformation_valeur',
            'contrainteformations.id as contrainteformation_id','batiments.id as batiment_id','batiments.nom as batiment_nom','etages.id as etage_id','etages.numeroEtage','valcouloirs.valeur as valcouloir_valeur',
            'valcouloirs.id as valcouloir_id')->get();

        
         return view('admin.couloirs.index', ['couloirs' => $couloirs]);*/

        $couloirs = DB::table('couloirs')
        ->leftjoin('contraintes', 'couloirs.contrainteniveau_id', '=', 'contraintes.id')
        ->leftjoin('contrainteformations', 'couloirs.contrainteformation_id', '=', 'contrainteformations.id')
        ->leftjoin('batiments','couloirs.batiment_id','=','batiments.id')
        ->leftjoin('etages','couloirs.etage_id','=','etages.id')
        ->leftjoin('valcouloirs','couloirs.valeur','=','valcouloirs.id')
        ->select('couloirs.id','couloirs.nbreChambres','couloirs.valeur as couloir_valeur', 'couloirs.id as couloir_id', 'contraintes.valeur as contrainte_valeur', 'contraintes.id as contrainteniveau_id','contrainteformations.valeur as contrainteformation_valeur','valcouloirs.valeur as valcouloir_valeur','valcouloirs.id as valcouloirs_id',
            'contrainteformations.id as contrainteformation_id','batiments.id as batiment_id','batiments.nom as batiment_nom','etages.id as etage_id','etages.numeroEtage')->get();





        
         return view('admin.couloirs.index', ['couloirs' => $couloirs]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $valcouloirs = Valcouloir::all();
        $batiments=Batiment::all();
        $etages= Etage::all();
        $contraintes= Contrainte::all();
        $contrainteformations= Contrainteformation::all();

        
        return view('admin.couloirs.create')->with('batiments',$batiments)->with('etages',$etages)->with('contraintes',$contraintes)->with('contrainteformations',$contrainteformations)->with('valcouloirs',$valcouloirs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $this->validate($request, [

            'valeur' => 'required',

            'nbreChambres' => 'required',

            'batiment_id' => 'required',

            'etage_id' => 'required',

        

        ]);


        Couloir::create($request->all());

        return redirect()->route('couloir.index')

                        ->with('success','Couloir created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $couloir = Couloir::find($id);

        $couloirCompts = DB::table('couloirs')
        ->leftjoin('contraintes', 'couloirs.contrainteniveau_id', '=', 'contraintes.id')
        ->leftjoin('contrainteformations', 'couloirs.contrainteformation_id', '=', 'contrainteformations.id')
        ->leftjoin('batiments','couloirs.batiment_id','=','batiments.id')
        ->leftjoin('etages','couloirs.etage_id','=','etages.id')
        ->leftjoin('valcouloirs','couloirs.valeur','=','valcouloirs.id')
        ->select('couloirs.id','couloirs.nbreChambres','couloirs.valeur as couloir_valeur', 'couloirs.id as couloir_id', 'contraintes.valeur as contrainte_valeur', 'contraintes.id as contrainteniveau_id','contrainteformations.valeur as contrainteformation_valeur','valcouloirs.valeur as valcouloir_valeur','valcouloirs.id as valcouloirs_id',
            'contrainteformations.id as contrainteformation_id','batiments.id as batiment_id','batiments.nom as batiment_nom','etages.id as etage_id','etages.numeroEtage as etage_numeroEtage')->where('couloirs.id',$id)->get();

        return view('admin.couloirs.show',compact('couloir'))->with('couloirCompts',$couloirCompts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $couloir = Couloir::find($id);

        $contraintesexes= Contraintesexe::all();
        $contraintes= Contrainte::all();
        $contrainteformations= Contrainteformation::all();
        $batiments = Batiment::all();
        $etages = Etage::all();
        $valcouloirs = Valcouloir::all();

        return view('admin.couloirs.edit',compact('couloir'))->with('contraintesexes',$contraintesexes)->
        with('contrainteformations',$contrainteformations)->with('contraintes',$contraintes)->with('valcouloirs',$valcouloirs)->with('batiments',$batiments)->with('etages',$etages);
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

           'valeur' => 'required',

            'nbreChambres' => 'required',

            'batiment_id' => 'required',

            'etage_id' => 'required',

        ]);


        Etage::find($id)->update($request->all());

        return redirect()->route('couloir.index')

                        ->with('success','Couloir updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Couloir::find($id)->delete();

        return redirect()->route('couloir.index')

                        ->with('success','Couloir deleted successfully');
    }
}
