<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Chambre;

use App\Batiment;

use App\Etage;

use App\Http\Requests\ChambreRequest;

use App\Http\Controllers\ChambreController;

use App\Contraintesexe;
use App\Contrainteformation;
use App\Contrainte;




class ChambreController extends Controller

{


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

       
        $chambres= Chambre::all();
        $batiments= Batiment::all();
        $etages= Etage::all();

        $contraintesexes= Contraintesexe::all();
        $contraintes= Contrainte::all();
        $contrainteformations= Contrainteformation::all();



        return view('admin.chambres.index',compact('chambres'))->with('batiments',$batiments)->with('etages',$etages)

        ->with('contrainteformations',$contrainteformations)->with('contraintes',$contraintes)->with('contraintesexes',$contraintesexes);

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

        $contraintesexes= Contraintesexe::all();
        $contraintes= Contrainte::all();
        $contrainteformations= Contrainteformation::all();
        return view('admin.chambres.create')->with('batiments',$batiments)->with('etages',$etages)->with('contraintes',$contraintes)->with('contrainteformations',$contrainteformations)->with('contraintesexes',$contraintesexes);

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

            'numeroChambre' => 'required',

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
        $contraintesexes= Contraintesexe::all();
        $contraintes= Contrainte::all();
        $contrainteformations= Contrainteformation::all();

        return view('admin.chambres.show',compact('chambre'))->with('contrainteformations',$contrainteformations)
        ->with('contraintes',$contraintes)->with('contraintesexes',$contraintesexes);

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

        $contraintesexes= Contraintesexe::all();
        $contraintes= Contrainte::all();
        $contrainteformations= Contrainteformation::all();

        return view('admin.chambres.edit',compact('chambre'))->with('batiments',$batiments)->with('etages',$etages)
        ->with('contrainteformations',$contrainteformations)->with('contraintes',$contraintes)->with('contraintesexes',$contraintesexes);

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
