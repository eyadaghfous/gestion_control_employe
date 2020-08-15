@extends('home')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des employés</h2>
            </div>
            <div class="float-right m-3">
                <a class="btn btn-success" href="{{ route('employees.create') }}"><i class="ik ik-plus"></i> Add </a> 
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nom et prénom</th>
            <th>Ville</th>
            <th>Etat</th>
            <th>Sexe</th>
            <th>Date d'embauche</th>
            <th width="150px">Action</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $employee->prenom }} {{ $employee->nom }}</td>
            <td>{{ $employee->ville }}</td>
            <td>{{ $employee->etat }}</td>
            <td>{{ $employee->sexe }}</td>
            <td>{{ $employee->date_embauche }}</td>
           
            <td>
                <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
   
    
                    <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}"><i class="ik ik-edit-1"></i></a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger"><i class="ik ik-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $employees->links() !!}
      
@endsection