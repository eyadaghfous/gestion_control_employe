@extends('home')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des contrats</h2>
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
            <th>Type</th>
            <th>Montant contrat</th>
            <th>Numéro facture</th>
            <th>Date du règlement</th>
            <th width="150px">Action</th>
        </tr>
        @foreach ($contrats as $contrat)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $contrat->type }}</td>
            <td>{{ $contrat->montant_ht_contrat }}</td>
            <td>{{ $contrat->num_facture }}</td>
            <td>{{ $contrat->date_reglement }}</td>
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