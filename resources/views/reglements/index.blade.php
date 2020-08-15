@extends('home')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des règlements</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('reglements.create') }}"> Ajouter un nouveau règlement</a>
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
            <th>Date du règlement</th>
            <th>Montant</th>
            <th>Numéro du client</th>
            <th>Numéro du contrat</th>
            <th>Type du règlement</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($reglements as $reglement)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $reglement->date }}</td>
            <td>{{ $reglement->montant }}</td>
            <td>{{ $reglement->num_client }}</td>
            <td>{{ $reglement->num_contrat }}</td>
            <td>{{ $reglement->type }}</td>
               <form action="{{ route('reglements.destroy',$reglement->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('reglements.show',$reglement->id) }}">Afficher</a>
    
                    <a class="btn btn-primary" href="{{ route('reglements.edit',$reglement->id) }}">Modifier</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $reglements->links() !!}
      
@endsection