@extends('home')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Customers</h2>
            </div>
            <div class="float-right m-3">
                @can('client-create')
                <a class="btn btn-success" href="{{ route('clients.create') }}"><i class="ik ik-plus"></i> Add </a>
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
            <th>Name</th>
            <th>Address</th>
            <th width="150px">Action</th>
        </tr>
        @foreach ($clients as $client)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $client->prenom }} {{ $client->nom }}</td>
            <td>{{ $client->adresse }}</td>
            <td>
                <form action="{{ route('clients.destroy',$client->id) }}" method="POST">
                    @can('client-edit')
                    <a class="btn btn-primary" href="{{ route('clients.edit',$client->id) }}"><i class="ik ik-edit-1"></i></a>
                    @endcan

                    @csrf
                    @method('DELETE')
                    @can('client-delete')
                    <button type="submit" class="btn btn-danger"><i class="ik ik-trash"></i></button>
                    @endcan

                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $clients->links() !!}
      
@endsection