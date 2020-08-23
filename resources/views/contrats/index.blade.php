@extends('home')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Contracts</h2>
            </div>
            <div class="float-right m-3">
                <a class="btn btn-success" href="{{ route('contrats.create') }}"><i class="ik ik-plus"></i> Add </a> 
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
            <th>Contract Details</th>
            <th>Title of project</th>
            <th>Customer</th>
            <th>Team</th>
            <th width="150px">Action</th>
        </tr>
        @foreach ($contrats as $contrat)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $contrat->details }}</td>
            @foreach ($projets as $projet)
                @if($projet->id ==  $contrat->num_projet)
                    <td>{{ $projet->titre }}</td>
                @endif
            @endforeach
            @foreach ($clients as $client)
                @if($client->id ==  $contrat->num_client)
                    <td>{{ $client->nom }} {{ $client->prenom }}</td>
                @endif
           @endforeach
           @foreach ($equipes as $equipe)
                @if($equipe->id ==  $contrat->num_equipe)
                    <td>{{ $equipe->nom }}</td>
                @endif
           @endforeach
            <td>
                <form action="{{ route('contrats.destroy',$contrat->id) }}" method="POST">
   
    
                    <a class="btn btn-primary" href="{{ route('contrats.edit',$contrat->id) }}"><i class="ik ik-edit-1"></i></a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger"><i class="ik ik-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $contrats->links() !!}
      
@endsection