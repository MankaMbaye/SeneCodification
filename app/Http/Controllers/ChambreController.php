<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Chambre;

use App\Batiment;

use App\Etage;

use App\Couloir;

use App\Http\Requests\ChambreRequest;

use App\Http\Controllers\ChambreController;
use App\Valcouloir;
use App\Contraintesexe;
use App\Contrainteformation;
use App\Contrainte;

use Illuminate\Support\Facades\DB;




class ChambreController extends Controller

{


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {
       
       /**
       
        $chambres= Chambre::all();
        $batiments= Batiment::all();
        $etages= Etage::all();

        $contraintesexes= Contraintesexe::all();
        $contraintes= Contrainte::all();
        $contrainteformations= Contrainteformation::all();



        return view('admin.chambres.index',compact('chambres'))->with('batiments',$batiments)->with('etages',$etages)

        ->with('contrainteformations',$contrainteformations)->with('contraintes',$contraintes)->with('contraintesexes',$contraintesexes);*/

        $chambres = DB::table('chambres')
        ->leftjoin('contraintes', 'chambres.contrainteniveau_id', '=', 'contraintes.id')
        ->leftjoin('contrainteformations', 'chambres.contrainteformation_id', '=', 'contrainteformations.id')
        ->leftjoin('contraintesexes','chambres.contraintesexe_id','=','contraintesexes.id')
        ->leftjoin('batiments','chambres.batiment_id','=','batiments.id')
        ->leftjoin('etages','chambres.etage_id','=','etages.id')
        ->leftjoin('valcouloirs','chambres.couloir_id','=','valcouloirs.id')
        ->select('chambres.id','chambres.numeroChambre','chambres.capacite', 'chambres.nbrePlaceRestantes', 'contraintes.valeur as contrainte_valeur', 'contraintes.id as contrainteniveau_id','contrainteformations.valeur as contrainteformation_valeur',
            'contrainteformations.id as contrainteformation_id','batiments.id as batiment_id','batiments.nom as batiment_nom','valcouloirs.id as valcouloir_id','valcouloirs.valeur as valcouloir_valeur','contraintesexes.valeur as contraintesexe_valeur',
            'contraintesexes.id as contraintesexe_id','etages.id as etage_id','etages.numeroEtage')->get();





        
         return view('admin.chambres.index', ['chambres' => $chambres]);


    }


    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $batiments=Batiment::all();
        $etages= Etage::all();
        $couloirs= Couloir::all();
        $valcouloirs= Valcouloir::all();
        $contraintesexes= Contraintesexe::all();
        $contraintes= Contrainte::all();
        $contrainteformations= Contrainteformation::all();
        
        return view('admin.chambres.create')->with('batiments',$batiments)->with('etages',$etages)->with('couloirs',$couloirs)->with('contraintes',$contraintes)->with('contrainteformations',$contrainteformations)->with('contraintesexes',$contraintesexes)->with('valcouloirs',$valcouloirs);

    }


    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(ChambreRequest $request)

    {

       $this->validate($request, [

            'numeroChambre' => 'required|unique:chambres',

            'capacite' => 'required',

            'batiment_id' => 'required',

            'etage_id' => 'required',

        

        ]);
          



        Chambre::create($request->all());

        return redirect()->route('chambre.index')

                        ->with('success','Chambre created successfully');


    }


    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $chambre = Chambre::find($id);
        
        $chambreCompts = DB::table('chambres')
        ->leftjoin('contraintes', 'chambres.contrainteniveau_id', '=', 'contraintes.id')
        ->leftjoin('contrainteformations', 'chambres.contrainteformation_id', '=', 'contrainteformations.id')
        ->leftjoin('contraintesexes','chambres.contraintesexe_id','=','contraintesexes.id')
        ->leftjoin('batiments','chambres.batiment_id','=','batiments.id')
        ->leftjoin('etages','chambres.etage_id','=','etages.id')
        ->leftjoin('valcouloirs','chambres.couloir_id','=','valcouloirs.id')
        ->select('chambres.id','chambres.numeroChambre','chambres.capacite', 'chambres.nbrePlaceRestantes', 'contraintes.valeur as contrainte_valeur', 'contraintes.id as contrainteniveau_id','contrainteformations.valeur as contrainteformation_valeur',
            'contrainteformations.id as contrainteformation_id','batiments.id as batiment_id','batiments.nom as batiment_nom','valcouloirs.id as valcouloir_id','valcouloirs.valeur as valcouloir_valeur','contraintesexes.valeur as contraintesexe_valeur',
            'contraintesexes.id as contraintesexe_id','etages.id as etage_id','etages.numeroEtage as etage_numeroEtage')->where('chambres.id',$id)->get();

        return view('admin.chambres.show',compact('chambre'))->with('chambreCompts',$chambreCompts);

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

        $etages= Etage::all();

        $chambre = Chambre::find($id);

        $couloirs= Couloir::all();

        $contraintesexes= Contraintesexe::all();
        $contraintes= Contrainte::all();
        $contrainteformations= Contrainteformation::all();

        return view('admin.chambres.edit',compact('chambre'))->with('batiments',$batiments)->with('etages',$etages)
        ->with('contrainteformations',$contrainteformations)->with('contraintes',$contraintes)->with('contraintesexes',$contraintesexes)->with('couloirs',$couloirs);

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

           'numeroChambre' => 'required',

           'capacite' => 'required',

            'batiment_id' => 'required',

            'etage_id' => 'required',

        ]);


        Chambre::find($id)->update($request->all());

        return redirect()->route('chambre.index')

                        ->with('success','Chambre updated successfully');


    }


    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        Chambre::find($id)->delete();

        return redirect()->route('chambre.index')

                        ->with('success','Chambre deleted successfully');

    }

}
