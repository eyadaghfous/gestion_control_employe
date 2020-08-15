@extends('home')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des règlements</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('taches.create') }}"> Ajouter un nouveau règlement</a>
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
            <th>Nom de la tache</th>
            <th>Début de la tache</th>
            <th>Fin de la tache</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($taches as $tache)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $tache->nom }}</td>
            <td>{{ $tache->debut }}</td>
            <td>{{ $tache->fin }}</td>
            
               <form action="{{ route('taches.destroy',$tache->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('taches.show',$tache->id) }}">Afficher</a>
    
                    <a class="btn btn-primary" href="{{ route('taches.edit',$tache->id) }}">Modifier</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $taches->links() !!}
      
@endsection