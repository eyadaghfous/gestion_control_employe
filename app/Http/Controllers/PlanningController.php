<?php

namespace App\Http\Controllers;

use App\Planning;
use Illuminate\Http\Request;

class PlanningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plannings = Planning::latest()->paginate(5);
  
        return view('plannings.index',compact('plannings'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plannings.create');
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
           
        ]);
  
        Planning::create($request->all());
   
        return redirect()->route('plannings.index')
                        ->with('success','Planning ajouté avec succés.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Planning  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Planning $planning)
    {
        return view('plannings.show',compact('planning'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Planning  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Planning $planning)
    {
        return view('plannings.edit',compact('planning'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Planning  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Planning $planning)
    {
        return redirect()->route('plannings.index')
        ->with('success','Planning modifié avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Planning  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Planning $planning)
    {
        $planning->delete();
  
        return redirect()->route('plannings.index')
                        ->with('danger','Planning supprimé');
    }
}
