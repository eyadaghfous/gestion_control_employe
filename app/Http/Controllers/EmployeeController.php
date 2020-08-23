<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Departement;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:employee-list|employee-create|employee-edit|employee-delete', ['only' => ['index','show']]);
         $this->middleware('permission:employee-create', ['only' => ['create','store']]);
         $this->middleware('permission:employee-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:employee-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departement = Departement::all();

        $employees = Employee::latest()->paginate(20);
  
        return view('employees.index',compact('employees'))
            ->with('i', (request()->input('page', 1) - 1) * 5)
            ->with('departements',$departement);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departement = Departement::all();
        return view('employees.create')
        ->with('departements',$departement);
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
            'email' => 'required',
            'motdepasse' => 'required',
            'numerotelephone' => 'required',
            'id_departement' => 'required',
            'ville' => 'required',
            'etat' => 'required',
            'sexe' => 'required',
            'date_embauche' => 'required',
            'photo' => 'required',
            
        ]);
            
        Employee::create($request->all());
   
        return redirect()->route('employees.index')
                        ->with('success','Employé added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Employee  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Employee  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
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
        ->with('success','Employé updated successfully.');
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
