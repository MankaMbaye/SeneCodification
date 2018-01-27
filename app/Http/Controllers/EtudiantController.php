<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use App\Departement;
use App\Http\Requests\EtudiantRequest;
use App\Http\Controllers\EtudiantController;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $etudiants= Etudiant::all();
        $departements= Departement::all();
        return view('admin.etudiants.index',compact('etudiants'))->with('departements',$departements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $departements=Departement::all();
        return view('admin.etudiants.create')->with('departements',$departements);
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

                        ->with('success','Etudiant created successfully');

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

        return view('admin.etudiants.show',compact('etudiant'));
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

        return view('admin.etudiants.edit',compact('etudiant'))->with('departements',$departements);
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
}
