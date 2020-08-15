<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::latest()->paginate(5);
  
        return view('employees.index',compact('employees'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
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
            'ville' => 'required',
            'etat' => 'required',
            'sexe' => 'required',
            'date_embauche' => 'required',
            
        ]);
  
        Employee::create($request->all());
   
        return redirect()->route('employees.index')
                        ->with('success','Employé ajouté avec succés.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Employee  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $employe)
    {
        return view('employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Employee  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employe $employe)
    {
        return view('employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Employee  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employe $employe)
    {
        return redirect()->route('employees.index')
        ->with('success','Employé modifié avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Employee  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $employe)
    {
        $employee->delete();
  
        return redirect()->route('employees.index')
                        ->with('danger','Employé supprimé');
    }
}
