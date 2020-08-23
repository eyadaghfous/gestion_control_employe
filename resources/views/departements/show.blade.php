@extends('home')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Departements</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('departements.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom:</strong>
                {{ $departement->nom }}
            </div>
        </div>
    
    </div>
@endsection