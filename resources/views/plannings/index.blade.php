@extends('home')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des plannings</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('plannings.create') }}"> Ajouter un nouveau planning</a>
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
            
            <th>Date </th>
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($plannings as $planning)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $planning->date }}</td>
           
               <form action="{{ route('plannings.destroy',$planning->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('plannings.show',$planning->id) }}">Afficher</a>
    
                    <a class="btn btn-primary" href="{{ route('plannings.edit',$planning->id) }}">Modifier</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $plannings->links() !!}
      
@endsection