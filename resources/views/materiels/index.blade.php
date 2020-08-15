@extends('home')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des matériels</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('materiels.create') }}"> Ajouter un nouveau matériel</a>
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
            <th>Type</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($materiels as $materiel)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $materiel->nom }}</td>
            <td>{{ $materiel->type }}</td>
            
               <form action="{{ route('materiels.destroy',$materiel->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('materiels.show',$materiel->id) }}">Afficher</a>
    
                    <a class="btn btn-primary" href="{{ route('materiels.edit',$materiel->id) }}">Modifier</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $materiels->links() !!}
      
@endsection