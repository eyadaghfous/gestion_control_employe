@extends('home')

@section('content')

<div class="col-md-">
    <div class="card">
        <div class="card-header"><h3>Ajouter un nouveau employé</h3></div>
        <div class="card-body">
            <form class="forms-sample">
                <div class="form-group">
                    <label for="exampleInputNom">Nom</label>
                    <input type="text" class="form-control" id="exampleInputNom" placeholder="Nom">
                </div>
                <div class="form-group">
                    <label for="exampleInputPrenom">Prénom</label>
                    <input type="text" class="form-control" id="exampleInputPrenom" placeholder="Prenom">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">Adresse E-mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmNumero">Numéro du téléphone</label>
                    <input type="number" class="form-control" id="exampleInputConfirmNumero" placeholder="Numero">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmDepartement">Département</label>
                    <input type="text" class="form-control" id="exampleInputConfirmDepartement" placeholder="Departement">
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmVille">Ville</label>
                    <input type="text" class="form-control" id="exampleInputConfirmVille" placeholder="Ville">
                </div>
                <div class="input-group-prepend">
                    <label>Etat</label>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Célibataire<i class="ik ik-chevron-down"></i></button>
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                        <a class="dropdown-item" href="#!">Célibataire</a>
                        <a class="dropdown-item" href="#!">Marié(e)</a>
                        <a class="dropdown-item" href="#!">Divorcé(e)</a>
                    </div>
                </div>
                <div class="form-group">
                    <label>Sexe</label>
                    <div class="form-radio">
                        <form>
                            <div class="radio radio-inline">
                                <label>
                                    <input type="radio" name="radio" checked="checked">
                                    <i class="helper"></i>Homme
                                </label>
                            </div>
                            <div class="radio radio-inline">
                                <label>
                                    <input type="radio" name="radio">
                                    <i class="helper"></i>Femme
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmDate">Date d'embauche</label>
                    <input type="date" class="form-control" id="exampleInputConfirmDate" placeholder="Date">
                </div>
                <div class="form-group">
                    <label for="exampleInputDescription">Description</label>
                    <input type="text" class="form-control" id="exampleInputConfirmDescription" placeholder="Description">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
        </div>
    </div>
</div>

@endsection