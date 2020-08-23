<?php

namespace App\Http\Controllers;

use App\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departements = Departement::latest()->paginate(20);
  
        return view('departements.index',compact('departements'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departements.create');
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
            
            
        ]);
  
        Departement::create($request->all());
   
        return redirect()->route('departements.index')
                        ->with('success','Departement added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Departement  $Departement
     * @return \Illuminate\Http\Response
     */
    public function show(Departement $departement)
    {
        return view('departements.show',compact('departement'));
    }

    public function show_employees(Departement $departement){
        $employees = $departement->employees;
        if(count($employees) > 0){
            return response()->json(['message'=>'Success','data'=>$employees],200);
        }
            return response()->json(['message'=>'No employees Found','data'=>null],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departement  $Departement
     * @return \Illuminate\Http\Response
     */
    public function edit(Departement $departement)
    {
        return view('departements.edit',compact('departement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departement $departement)
    {
        $request->validate([
            'nom' => 'required',
           
        ]);
  
        $departement->update($request->all());
  
        return redirect()->route('departements.index')
                        ->with('success','Departement modifié avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\departement  $Departement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departement $departement)
    {
        $departement->delete();
  
        return redirect()->route('departements.index')
                        ->with('danger','Departement supprimé');
    }
}










