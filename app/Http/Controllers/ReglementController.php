<?php

namespace App\Http\Controllers;

use App\Reglement;
use Illuminate\Http\Request;


class ReglementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reglements = Reglement::latest()->paginate(5);
  
        return view('reglements.index',compact('reglements'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reglements.create');
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
            'date' => 'required',
            'montant' => 'required',
            'num_client' => 'required',
            'num_contrat' => 'required',
            'type' => 'required',
            
        ]);
  
        Reglement::create($request->all());
   
        return redirect()->route('reglements.index')
                        ->with('success','Règlement ajouté avec succés.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Reglement  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reglement $reglement)
    {
        return view('reglements.show',compact('reglement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Reglement  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reglement $reglement)
    {
        return view('reglements.edit',compact('reglement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Reglement  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reglement $reglement)
    {
        return redirect()->route('reglements.index')
        ->with('success','Règlement modifié avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Reglement  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reglement $reglement)
    {
        $reglement->delete();
  
        return redirect()->route('reglements.index')
                        ->with('danger','Règlement supprimé');
    }
}
