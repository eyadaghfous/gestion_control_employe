@extends('home')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Afficher le contrat</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('contrats.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Type:</strong>
                {{ $contrat->type }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Montant contrat:</strong>
                {{ $contrat->montant_ht_contrat }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numéro facture:</strong>
                {{ $contrat->num_facture }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date du règlement:</strong>
                {{ $contrat->date_reglement }}
            </div>
        </div>
    </div>
@endsection