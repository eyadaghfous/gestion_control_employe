@extends('home')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier la tache</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('taches.index') }}"> Back</a>
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

    <form action="{{ route('taches.update', $tache->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom :</strong>
                    <input type="text" name="nom" class="form-control" value="{{ $tache->nom }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Début de la tache :</strong>
                    <input class="form-control" type="date" name="debut"value="{{ $tache->debut }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fin de la tache :</strong>
                    <input class="form-control" type="date" name="fin"value="{{ $tache->fin }}">
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
       
    </form>
@endsection
