@extends('home')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier l'équipe'</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('equipes.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Il ya un problème.<br><br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('equipes.update', $equipe->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom:</strong>
                    <input type="text" name="nom" class="form-control" value="{{ $equipe->nom }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <input class="form-control" type="text" name="description"value="{{ $equipe->description }}">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID employé:</strong>
                    <input class="form-control" type="number" name="id_employe" value="{{ $equipe->id_employe }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date création:</strong>
                    <input class="form-control" type="date" name="date_creation" value="{{ $equipe->date_creation }}">
                </div>
            </div>
          
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
       
    </form>
@endsection
