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

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $reservations = DB::table('reservations')

        ->leftjoin('etudiants', 'reservations.etudiant_id', '=', 'etudiants.id')
        ->leftjoin('batiments','reservations.batiment_id','=','batiments.id')
        ->leftjoin('etages','reservations.etage_id','=','etages.id')
        ->leftjoin('positions','reservations.position_id','=','positions.id')
        ->leftjoin('chambres','reservations.chambre_id','=','chambres.id')
        ->leftjoin('valcouloirs','reservations.couloir_id','=','valcouloirs.id')
        ->select('reservations.id', 'batiments.nom as batiment_nom', 'batiments.id as batiment_id','valcouloirs.valeur as valcouloir_valeur','valcouloirs.id as valcouloir_id','etages.id as etage_id','chambres.id as chambre_id','chambres.numeroChambre as chambre_numeroChambre','positions.id as position_id','positions.numPosition as position_numPosition','etudiants.id as etudiant_id','etudiants.prenom as etudiant_prenom','etudiants.nom as etudiant_nom','etudiants.niveau as etudiant_niveau')->get();

        
        return view('etudiant.reservations.index', ['reservations' => $reservations]);



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
        $reservations= Reservation::all();
        return view('etudiant.reservations.create')->with('batiments',$batiments)->with('etages',$etages)->with('chambres',$chambres)->with('couloirs',$couloirs)->with('valcouloirs',$valcouloirs)->with('positions',$positions)->with('etudiants',$etudiants)->with('reservations',$reservations);
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

            'position_id' => 'required',

            'batiment_id' => 'required',

            'etage_id' => 'required',

            'chambre_id' => 'required',

            'couloir_id' =>'required',

            'etudiant_id'=>'required|unique:reservations',

        

        ]);


        Reservation::create($request->all());

        return redirect()->route('reservation.index')

                        ->with('success','Reservation prise en compte avec succes, Veuillez confirmer avant 24  heures');
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
        $batiments= Batiment::all();

        $etages= Etage::all();

        $chambres= Chambre::all();

        $positions = Position::all();

        $reservation= Reservation::find($id);

        $valcouloirs= Valcouloir::all();


        return view('etudiant.reservations.edit',compact('reservation'))->with('batiments',$batiments)->with('etages',$etages)->with('chambres',$chambres)->with('positions',$positions)->with('valcouloirs',$valcouloirs);
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
        


        Reservation::find($id)->update($request->all());

        return redirect()->route('reservation.index')

                        ->with('success','Codification prise en compte avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reservation::find($id)->delete();

        return redirect()->route('reservation.index')

                        ->with('success','La reservation a ete annulee avec succes,Veuillez faire une nouvelle reservation');
    }
}
