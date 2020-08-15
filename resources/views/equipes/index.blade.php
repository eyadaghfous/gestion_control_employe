@extends('home')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des équipes</h2>
            </div>
            <div class="float-right m-3">
                <a class="btn btn-success" href="{{ route('equipes.create') }}"><i class="ik ik-plus"></i> Add </a> 
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
            <th>Nom</th>
            <th>Description</th>
            <th>ID l'employé</th>
            <th>Date création</th>
            <th width="150px">Action</th>
        </tr>
        @foreach ($equipes as $equipe)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $equipe->nom }}</td>
            <td>{{ $equipe->description }}</td>
            <td>{{ $equipe->id_employe }}</td>
            <td>{{ $equipe->date_creation }}</td>
           
            
                <td><form action="{{ route('equipes.destroy',$equipe->id) }}" method="POST">
   
    
                    <a class="btn btn-primary" href="{{ route('equipes.edit',$equipe->id) }}"><i class="ik ik-edit-1"></i></a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger"><i class="ik ik-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $equipes->links() !!}
      
@endsection