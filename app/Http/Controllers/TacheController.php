<?php

namespace App\Http\Controllers;

use App\Tache;
use App\Status;
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
        
        $status=Status::all();
        $taches = Tache::latest()->paginate(20);
        $todo=[];
        $progress=[];
        $completed=[];
        foreach($taches as $tache)
        {
            $todo = $tache
			->where('num_status', '=', '1')
            ->get();
            $progress = $tache
			->where('num_status', '=', '2')
            ->get();
            $completed = $tache
			->where('num_status', '=', '3')
			->get();
        }
        
        return view('taches.index',compact('taches'))
            ->with('i', (request()->input('page', 1) - 1) * 5)
            ->with('todo', $todo)
            ->with('progress', $progress)
            ->with('completed', $completed)
            ->with('status', $status);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status=Status::all();

        return view('taches.create')
        ->with('status', $status);
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
            'sommaire' => 'required',
            'description' => 'required',
            'status' => 'required',
            'debut' => 'required',
            'fin' => 'required',
            
        ]);
  
        Tache::create($request->all());
        $status=Status::all();

        return redirect()->route('taches.index')
                            ->with('status', $status)
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
    public function update(Request $request,  $id)
    {
        $this->validate($request, [
            'sommaire' => 'required',
            'description' => 'required',
            'status' => 'required',
            'debut' => 'required',
            'fin' => 'required',
        ]);


        $input = $request->all();
        

        $tache = Tache::find($id);
        $tache->update($input);



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
