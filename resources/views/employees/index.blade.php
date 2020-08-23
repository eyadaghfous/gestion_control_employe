@extends('home')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Employees</h2>
            </div>
            <div class="float-right m-3">
                @can('employee-create')
                <a class="btn btn-success" href="{{ route('employees.create') }}"><i class="ik ik-plus"></i> Add </a> 
                @endcan
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
            <th>Name</th>
            <th>Departements</th>
            <th width="150px">Action</th>
        </tr>
        @foreach ($employees as $employee)
        
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $employee->prenom }} {{ $employee->nom }}</td>
            @foreach ($departements as $departement)
            @if($departement->id ==  $employee->id_departement)
            <td>{{ $departement->nom }}</td>
            @endif
           @endforeach
            <td>
                <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
   
                    @can('employee-edit')
                    <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}"><i class="ik ik-edit-1"></i></a>
                    @endcan
                    @csrf
                    @method('DELETE')
                    @can('employee-delete')
                    <button type="submit" class="btn btn-danger"><i class="ik ik-trash"></i></button>
                    @endcan
                </form>
            </td>
        </tr>
        
        @endforeach
    </table>
  
    {!! $employees->links() !!}
      
@endsection