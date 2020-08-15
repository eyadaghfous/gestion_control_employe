@extends('home')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des factures</h2>
            </div>
            <div class="float-right m-3">
                <a class="btn btn-success" href="{{ route('factures.create') }}"><i class="ik ik-plus"></i> Add </a>
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
            <th>Numéro client</th>
            <th>Date</th>
            <th>Mode du paiement</th>
            <th width="150px">Action</th>
        </tr>
        @foreach ($factures as $facture)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $facture->num_client }}</td>
            <td>{{ $facture->date }}</td>
            <td>{{ $facture->modepaiement }}</td>
               <td><form action="{{ route('factures.destroy',$facture->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('factures.edit',$facture->id) }}"><i class="ik ik-edit-1"></i></a>

                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger"><i class="ik ik-trash"></i></button>

                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $factures->links() !!}
      
@endsection