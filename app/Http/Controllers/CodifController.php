<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Opencodif;

class CodifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opencodifs = Opencodif::all();

        return view('admin.opencodifs.index',compact('opencodifs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('admin.opencodifs.create');
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

            'annee' => 'required',

            'dateouverture' => 'required',

            'datefermeture' => 'required',

        ]);


        Opencodif::create($request->all());

        return redirect()->route('opencodif.index')

                        ->with('success','La reservation a ete ouverte avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $opencodif = Opencodif::find($id);

        return view('admin.opencodifs.show',compact('opencodif'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opencodif = Opencodif::find($id);

        return view('admin.opencodifs.edit',compact('opencodif'));
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

            'annee' => 'required',

            'dateouverture' => 'required',

            'datefermeture' => 'required',

        ]);


        Opencodif::find($id)->update($request->all());

        return redirect()->route('opencodif.index')

                        ->with('success','La codification a ete mise a jour avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        Opencodif::find($id)->delete();

        return redirect()->route('opencodif.index')

                        ->with('success','La codification a ete supprimee avec succes');
        

    }
}
