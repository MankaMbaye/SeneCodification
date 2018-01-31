<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Batiment;
use App\Etage;
use App\Couloir;
use App\Position;
use App\Chambre;
use App\Reservation;
use DB;
use App\Valcouloir;
use App\Etudiant;

class CodificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $codifications = DB::table('codifications')

        ->leftjoin('etudiants', 'codifications.etudiant_id', '=', 'etudiants.id')
        ->leftjoin('batiments','codifications.batiment_id','=','batiments.id')
        ->leftjoin('etages','codifications.etage_id','=','etages.id')
        ->leftjoin('positions','codifications.position_id','=','positions.id')
        ->leftjoin('chambres','codifications.chambre_id','=','chambres.id')
        ->leftjoin('valcouloirs','codifications.couloir_id','=','valcouloirs.id')
        ->select('codifications.id', 'batiments.nom as batiment_nom', 'batiments.id as batiment_id','valcouloirs.valeur as valcouloir_valeur','valcouloirs.id as valcouloir_id','etages.id as etage_id','chambres.id as chambre_id','chambres.numeroChambre as chambre_numeroChambre','positions.id as position_id','positions.numPosition as position_numPosition','etudiants.id as etudiant_id','etudiants.prenom as etudiant_prenom','etudiants.nom as etudiant_nom','etudiants.niveau as etudiant_niveau')->get();

        
        return view('etudiant.codifications.index', ['codifications' => $codifications]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $couloirs = Couloir::all();
        $batiments=Batiment::all();
        $etages= Etage::all();
        $chambres=Chambre::all();
        $positions=Position::all();
        $valcouloirs= Valcouloir::all();
        $etudiants= Etudiant::all();
        $codifications= Codification::all();
        return view('etudiant.codifications.create')->with('batiments',$batiments)->with('etages',$etages)->with('chambres',$chambres)->with('couloirs',$couloirs)->with('valcouloirs',$valcouloirs)->with('positions',$positions)->with('etudiants',$etudiants)->with('codifications',$codifications);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
