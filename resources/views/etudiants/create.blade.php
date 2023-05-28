@extends('layouts.app')
@section('title', config('app.name'))
@section('titleHeader', 'Ajout d\'un étudiant')
@section('content')
<div class="row mt-4 justify-content-center">
    <div class="col-6">
        <div class="card">
            <form method="POST">
                @csrf
                <div class="card-header">
                    formulaire
                </div>
                <div class="card-body">
                    <label for="nom">Prénom Nom</label>
                    <input type="text" id="nom" name="nom" class="form-control">

                    <label for="adresse">Adresse</label>
                    <input id="adresse" name="adresse" class="form-control">
                    <label for="ville">Ville</label>
                    <select name="ville_id" id="ville" class="form-control">
                        @foreach($villes as $ville)
                            <option value="{{$ville->id}}">{{$ville->nom}}</option>
                        @endforeach
                    </select>
                    <label for="telephone">Téléphone</label>
                    <input type="text" name="telephone" id="telephone">
                    <label for="courriel">Courriel</label>
                    <input type="text" name="courriel" id="courriel">
                    <label for="date_de_naissance">Date de naissance</label>
                    <input type="date" name="date_de_naissance" id="date_de_naissance">
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('etudiants.index') }}" class="btn btn-secondary">Retour</a>
                    <input type="submit" class="btn btn-success" value="Enregistrer">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection