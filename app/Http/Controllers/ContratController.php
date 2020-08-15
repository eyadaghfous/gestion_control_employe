<?php

namespace App\Http\Controllers;

use App\Contrat;
use Illuminate\Http\Request;


class ContratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contrats = Contrat::latest()->paginate(5);
  
        return view('contrats.index',compact('contrats'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contrats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'date' => 'required',
            'montant_ht_contrat' => 'required',
            'ville' => 'required',
            'num_facture' => 'required',
            'date_facture' => 'required',
            'montant_ht_facture' => 'required',
            'date_reglement' => 'required',
        ]);
  
        Contrat::create($request->all());
   
        return redirect()->route('contrats.index')
                        ->with('success','Contrat ajouté avec succés.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Contrat  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contrat $contrat)
    {
        return view('contrats.show',compact('contrat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Contrat  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contrat $contrat)
    {
        return view('contrats.edit',compact('contrat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Contrat $contrat)
    {
        $request->validate([
            'type' => 'required',
            'date' => 'required',
            'montant_ht_contrat' => 'required',
            'ville' => 'required',
            'num_facture' => 'required',
            'date_facture' => 'required',
            'montant_ht_facture' => 'required',
            'date_reglement' => 'required',
        ]);
  
        Contrat::update($request->all());
   
        return redirect()->route('contrats.index')
                        ->with('success','Contrat modifié avec succés.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Contrat  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contrat $contrat)
    {
        $contrat->delete();
  
        return redirect()->route('contrats.index')
                        ->with('danger','Contrat supprimé');
    }
}
