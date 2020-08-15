@extends('home')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des projets</h2>
            </div>
            <div class="float-right m-3">
                <a class="btn btn-success" href="{{ route('projets.create') }}"><i class="ik ik-plus"></i> Add </a>
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
            <th>Titre du projet</th>
            <th>Date fin</th>
            <th>Lieu</th>
            <th>Type</th>
            <th>Chef</th>
            <th width="150px">Action</th>
        </tr>
        @foreach ($projets as $projet)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $projet->titre }}</td>
            <td>{{ $projet->date_fin }}</td>
            <td>{{ $projet->lieu }}</td>
            <td>{{ $projet->type }}</td>
            <td>{{ $projet->chef }}</td>
               <td><form action="{{ route('projets.destroy',$projet->id) }}" method="POST">
   
    
                    <a class="btn btn-primary" href="{{ route('projets.edit',$projet->id) }}"><i class="ik ik-edit-1"></i></a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger"><i class="ik ik-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  


    
    {!! $projets->links() !!}
      
@endsection