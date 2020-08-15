<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Equipe;
class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes = Equipe::latest()->paginate(5);
  
        return view('equipes.index',compact('equipes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipes.create');
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
            'nom' => 'required',
            'description' => 'required',
            'id_employe' => 'required',
            'date_creation' => 'required',
            
        ]);
  
        Equipe::create($request->all());
   
        return redirect()->route('equipes.index')
                        ->with('success','Equipe ajouté avec succés.');
    }

    /**
     * Display the specified resource.
     *
     * @param  equipe  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Equipe $equipe)
    {
        return view('equipes.show',compact('equipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  equipe  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipe $equipe)
    {
        return view('equipes.edit',compact('equipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  equipe  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipe $equipe)
    {
        return redirect()->route('equipes.index')
        ->with('success','equipe modifié avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  equipe  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipe $equipe)
    {
        $equipe->delete();
  
        return redirect()->route('equipes.index')
                        ->with('danger','Equipe supprimé');
    }
}
