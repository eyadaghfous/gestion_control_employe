<?php

namespace App\Http\Controllers;

use App\Materiel;
use Illuminate\Http\Request;

class MaterielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiels = Materiel::latest()->paginate(5);
  
        return view('materiels.index',compact('materiels'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materiels.create');
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
            'type' => 'required',
         
        ]);
  
        Materiel::create($request->all());
   
        return redirect()->route('materiels.index')
                        ->with('success','Matériel ajouté avec succés.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Materiel  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Materiel $materiel)
    {
        return view('materiels.show',compact('materiel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Materiel  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Materiel $materiel)
    {
        return view('materiels.edit',compact('materiel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Materiel  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materiel $materiel)
    {
        return redirect()->route('materiels.index')
        ->with('success','Matériel modifié avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Materiel  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materiel $materiel)
    {
        $materiel->delete();
  
        return redirect()->route('materiels.index')
                        ->with('danger','Matériel supprimé');
    }
}
