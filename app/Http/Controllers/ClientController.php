<?php

namespace App\Http\Controllers;

use App\Client;
use App\Contract;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:client-list|client-create|client-edit|client-delete', ['only' => ['index','show']]);
         $this->middleware('permission:client-create', ['only' => ['create','store']]);
         $this->middleware('permission:client-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:client-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::latest()->paginate(20);
  
        return view('clients.index',compact('clients'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
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
            'prenom' => 'required',
            'datedenaissance' => 'required',
            'numerotelephone' => 'required',
            'adresse' => 'required',
            'ville' => 'required',
            'codepostal' => 'required',
            'email' => 'required',
            'motdepasse' => 'required',
            
        ]);
  
        Client::create($request->all());
   
        return redirect()->route('clients.index')
                        ->with('success','Client ajouté avec succés.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('clients.show',compact('client'));
    }

    public function show_contrats(Client $client){
        $contrats = $client->contrats;
        if(count($contrats) > 0){
            return response()->json(['message'=>'Success','data'=>$contrats],200);
        }
            return response()->json(['message'=>'No contracts Found','data'=>null],200);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('clients.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'datedenaissance' => 'required',
            'numerotelephone' => 'required',
            'adresse' => 'required',
            'ville' => 'required',
            'codepostal' => 'required',
            'email' => 'required',
            'motdepasse' => 'required',
        ]);
  
        $client->update($request->all());
  
        return redirect()->route('clients.index')
                        ->with('success','Client modifié avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
  
        return redirect()->route('clients.index')
                        ->with('danger','Client supprimé');
    }
}










