@extends('layouts.app')
@section('title', config('app.name'))
@section('titleHeader', 'Modification de l\'étudiant #'. $etudiant->id)
@section('content')
<div class="row mt-4 justify-content-center">
    <div class="col-6">
        <div class="card">
            <form method="POST">
                @csrf
                @method('put')
                <div class="card-header">
                    formulaire
                </div>
                <div class="card-body">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" class="form-control" value="{{ $etudiant->nom }}">
                    <label for="adresse">adresse</label>
                    <input type="text" id="adresse" name="adresse" class="form-control" value="{{ $etudiant->adresse }}">
                    <label for="telephone">telephone</label>
                    <input type="text" id="telephone" name="telephone" class="form-control" value="{{ $etudiant->telephone }}">
                    <label for="courriel">courriel</label>
                    <input type="text" id="courriel" name="courriel" class="form-control" value="{{ $etudiant->courriel }}">
                    <label for="date_de_naissance">date de naissance</label>
                    <input type="date" id="date_de_naissance" name="date_de_naissance" class="form-control" value="{{ $etudiant->date_de_naissance }}">

                    <select name="ville_id" id="ville" class="form-control">
                        @foreach($villes as $ville)
                            <option value="{{$ville->id}}">{{$ville->nom}}</option>
                        @endforeach
                    </select>
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