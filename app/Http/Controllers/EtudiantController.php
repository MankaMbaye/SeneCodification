<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use App\Departement;
use App\Http\Requests\EtudiantRequest;
use App\Http\Controllers\EtudiantController;
use DB;
use App\Sexe;
use App\Niveau;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function indexe()
    {
       $etudiant= Etudiant::find($id);
       $datas = DB::table('etudiants')->get();
       $where = DB::table('etudiants')->where('niveau','DIC1')->first(); 
       $whereSexe= DB::table('etudiants')->where('sexe','1')->get();
       $wheres= DB::table('etudiants')->where('id','1')->where('departement_id','1')->first();

       $whereNiveau = DB::table('etudiants')
                ->where('niveau', '=', 'DIC1')
                ->get();

       $max = DB::table('etudiants')->max('id');
       $min = DB::table('etudiants')->min('id');

       $whereDept= DB::table('etudiants')->where('departement_id',1)->get(
       );


       $whare = DB::table('etudiants')
        ->select('etudiants.id','etudiants.prenom','etudiants.numtel')->where('id','$id')->get();


       return view('student',compact('datas','where','whereSexe','max','min','whereDept','whare'));

    }


    public function index()
    {





        $etudiants = DB::table('etudiants')
        ->leftjoin('departements', 'etudiants.departement_id', '=', 'departements.id')
        ->select('etudiants.id', 'etudiants.nom','etudiants.prenom','etudiants.numCarteEtudiant' ,'departements.nom as departement_nom', 'departements.id as departement_id')->get();
        
        $departements= Departement::all();
        $sexes = Sexe::all();
        $niveaus= Niveau::all();
        return view('admin.etudiants.index',compact('etudiants'))->with('departements',$departements)->with('sexes',$sexes)->with('niveaus',$niveaus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $departements=Departement::all();
         $sexes = Sexe::all();
         $niveaus= Niveau::all();
        return view('admin.etudiants.create')->with('departements',$departements)->with('sexes',$sexes)->with('niveaus',$niveaus);
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

            'nom' => 'required',

            'prenom' => 'required',

            'numtel' => 'required',

        ]);


        Etudiant::create($request->all());

        return redirect()->route('etudiant.index')

                        ->with('success','Inscription prise en compte avec succes, Veuillez consulter votre nom
                            sur la liste suivante');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etudiant = Etudiant::find($id);

        $etuDepts= DB::table('etudiants')->join('departements','departements.id','=','etudiants.departement_id')->where('departement_id','1')->where('sexe','1')->where('etudiants.id',$id)->get();

        return view('admin.etudiants.show',compact('etudiant'))->with('etuDepts',$etuDepts);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departements= Departement::all();

        $etudiant = Etudiant::find($id);

        $niveaus = Niveau::all();

        return view('admin.etudiants.edit',compact('etudiant'))->with('departements',$departements)->with('niveaus',$niveaus);
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

            'prenom' => 'required',

            'numtel' => 'required',

            'dateDeNaissance'=> 'required',

        ]);


        Etudiant::find($id)->update($request->all());

        return redirect()->route('etudiant.index')

                        ->with('success','Etudiant updated successfully');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Etudiant::find($id)->delete();

        return redirect()->route('etudiant.index')

                        ->with('success','Etudiant deleted successfully');
    }


    public function getEtudiant($id)
    {

        $etudiants = DB::table('etudiants')->get();

        $etuDepts= DB::table('etudiants')->join('departements','departements.id','=','etudiants.departement_id')->where('departement_id','1')->where('sexe','1')->get();

        return view('admin.etudiants.indexe',['etuDepts'=>$etuDepts]);
    }

    public function join()
    {
       

        return view('join',compact('etuDepts'));

    }
}
