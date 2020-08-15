<?php

namespace App\Http\Controllers;

use App\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = Projet::latest()->paginate(5);
  
        return view('projets.index',compact('projets'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projets.create');
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
            'titre' => 'required',
            'date_creation' => 'required',
            'date_fin' => 'required',
            'lieu' => 'required',
            'type' => 'required',
            'budget' => 'required',
            'chef' => 'required',
        ]);
  
        Projet::create($request->all());
   
        return redirect()->route('projets.index')
                        ->with('success','Projet ajouté avec succés.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Projet  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Projet $projet)
    {
        return view('projets.show',compact('projet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Projet  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Projet $projet)
    {
        return view('projets.edit',compact('projet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Projet  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Projet $projet)
    {
        return redirect()->route('projets.index')
        ->with('success','Projet modifié avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  projet  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $projet)
    {
        $projet->delete();
  
        return redirect()->route('projets.index')
                        ->with('danger','Projet supprimé');
    }
}
