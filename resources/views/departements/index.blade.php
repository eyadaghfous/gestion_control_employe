@extends('home')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Departements</h2>
            </div>
            <div class="float-right m-3">
                @can('employee-create')
                <a class="btn btn-success" href="{{ route('departements.create') }}"><i class="ik ik-plus"></i> Add </a> 
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
            <th>Name of departements</th>
            <th width="150px">Action</th>
        </tr>
        @foreach ($departements as $departement)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $departement->nom }} </td>
          
            <td>
                <form action="{{ route('departements.destroy',$departement->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('departements.edit',$departement->id) }}"><i class="ik ik-edit-1"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="ik ik-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $departements->links() !!}
      
@endsection