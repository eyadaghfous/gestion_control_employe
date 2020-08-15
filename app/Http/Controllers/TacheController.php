<?php

namespace App\Http\Controllers;

use App\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taches = Tache::latest()->paginate(5);
  
        return view('taches.index',compact('taches'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('taches.create');
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
            'debut' => 'required',
            'fin' => 'required',
            
        ]);
  
        Tache::create($request->all());
   
        return redirect()->route('taches.index')
                        ->with('success','Tache ajoutée avec succés.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Tache  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tache $tache)
    {
        return view('taches.show',compact('tache'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Tache  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tache $tache)
    {
        return view('taches.edit',compact('tache'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Tache  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tache $tache)
    {
        return redirect()->route('taches.index')
        ->with('success','Tache modifiée avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Tache  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tache $tache)
    {
        $tache->delete();
  
        return redirect()->route('taches.index')
                        ->with('danger','Tache supprimée');
    }
}
