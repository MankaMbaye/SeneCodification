<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Chambre;

use App\Position;

use App\Batiment;

use App\Etage;

use App\Couloir;

use App\Valcouloir;

use App\Http\Requests\PositionRequest;

use App\Http\Controllers\PositionController;

use App\Contraintesexe;
use App\Contrainteformation;
use App\Contrainte;

use Illuminate\Support\Facades\DB;



class PositionController extends Controller

{


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {
        /**
        $contraintesexes= Contraintesexe::all();
        $contraintes= Contrainte::all();
        $contrainteformations= Contrainteformation::all();


       
        $positions= Position::all();
        $batiments= Batiment::all();
        $etages= Etage::all();
        $chambres=Chambre::all();
        return view('admin.positions.index',compact('positions'))->with('batiments',$batiments)->with('etages',$etages)->with('chambres',$chambres)->with('contrainteformations',$contrainteformations)->with('contraintes',
            $contraintes)->with('contraintesexes',$contraintesexes); */






        $positions = DB::table('positions')

        ->leftjoin('contraintes', 'positions.contrainteniveau_id', '=', 'contraintes.id')
        ->leftjoin('contrainteformations', 'positions.contrainteformation_id', '=', 'contrainteformations.id')
        ->leftjoin('batiments','positions.batiment_id','=','batiments.id')
        ->leftjoin('etages','positions.etage_id','=','etages.id')
        ->leftjoin('chambres','positions.chambre_id','=','chambres.id')
        ->leftjoin('valcouloirs','positions.couloir_id','=','valcouloirs.id')
        ->select('positions.id','positions.numPosition','positions.nbrePlaceRestantes', 'contraintes.valeur as contrainte_valeur', 'contraintes.id as contrainteniveau_id','contrainteformations.valeur as contrainteformation_valeur','valcouloirs.valeur as valcouloir_valeur','valcouloirs.id as valcouloir_id',
            'contrainteformations.id as contrainteformation_id','batiments.id as batiment_id','batiments.nom as batiment_nom','etages.id as etage_id','chambres.id as chambre_id')->get();





        
         return view('admin.positions.index', ['positions' => $positions]);





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
        $couloirs = Couloir::all();
        $batiments=Batiment::all();
        $etages= Etage::all();
        $chambres=Chambre::all();
        $valcouloirs= Valcouloir::all();
        return view('admin.positions.create')->with('batiments',$batiments)->with('etages',$etages)->with('chambres',$chambres)->with('contrainteformations',$contrainteformations)->with('contraintesexes',$contraintesexes)->
        with('contraintes',$contraintes)->with('couloirs',$couloirs)->with('valcouloirs',$valcouloirs);

    }


    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(PositionRequest $request)

    {

       $this->validate($request, [

            'numPosition' => 'required',

            'batiment_id' => 'required',

            'etage_id' => 'required',

            'chambre_id' => 'required',

        

        ]);


        Position::create($request->all());

        return redirect()->route('position.index')

                        ->with('success','Position created successfully');


    }


    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {
       

        $position = Position::find($id);


        $positionCompts = DB::table('positions')

        ->leftjoin('contraintes', 'positions.contrainteniveau_id', '=', 'contraintes.id')
        ->leftjoin('contrainteformations', 'positions.contrainteformation_id', '=', 'contrainteformations.id')
        ->leftjoin('batiments','positions.batiment_id','=','batiments.id')
        ->leftjoin('etages','positions.etage_id','=','etages.id')
        ->leftjoin('chambres','positions.chambre_id','=','chambres.id')
        ->leftjoin('valcouloirs','positions.couloir_id','=','valcouloirs.id')
        ->select('positions.id','positions.numPosition','positions.nbrePlaceRestantes', 'contraintes.valeur as contrainte_valeur', 'contraintes.id as contrainteniveau_id','contrainteformations.valeur as contrainteformation_valeur','valcouloirs.valeur as valcouloir_valeur','valcouloirs.id as valcouloir_id',
            'contrainteformations.id as contrainteformation_id','batiments.id as batiment_id','batiments.nom as batiment_nom','etages.id as etage_id','chambres.id as chambre_id')->where('positions.id',$id)->get();

        return view('admin.positions.show',compact('position'))->with('positionCompts',$positionCompts);

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

        $chambres= Chambre::all();

        $position = Position::find($id);

        $contraintesexes= Contraintesexe::all();
        $contraintes= Contrainte::all();
        $contrainteformations= Contrainteformation::all();

        return view('admin.positions.edit',compact('position'))->with('batiments',$batiments)->with('etages',$etages)->with('chambres',$chambres)->with('contrainteformations',$contrainteformations)->with('contraintes',$contraintes)->with('contraintesexes',$contraintesexes);

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

           'numPosition' => 'required',

            'batiment_id' => 'required',

            'etage_id' => 'required',

            'chambre_id' => 'required',

        ]);


        Position::find($id)->update($request->all());

        return redirect()->route('position.index')

                        ->with('success','Position updated successfully');


    }


    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        Position::find($id)->delete();

        return redirect()->route('position.index')

                        ->with('success','Position deleted successfully');

    }

}
