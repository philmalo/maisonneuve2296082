@extends('layouts.app')
@section('title', config('app.name'))
@section('titleHeader', 'Détail')
@section('content')

<nav>
    <a href="{{ route('etudiants.index') }}" class="mb-3 btn btn-primary btn-sm">Revenir en arrière</a>
</nav>
<div class="student-card">
    <div class="student-card-header">
        <h2 class="student-name">{{ $etudiant->nom }}</h2>
    </div>
    <div class="student-card-body">
        <p><strong>Adresse :</strong> {{ $etudiant->adresse }}</p>
        <p><strong>Téléphone :</strong> {{ $etudiant->telephone }}</p>
        <p><strong>Courriel :</strong> {{ $etudiant->courriel }}</p>
        <p><strong>Date de naissance :</strong> {{ $etudiant->date_de_naissance }}</p>
        <p><strong>Ville :</strong> {{ $etudiant->etudiantHasVille->nom }}</p>
    </div>
    <div>
    <a href="{{ route('etudiants.edit', $etudiant->id) }}" class="btn btn-success">Modifier</a>
    <a href="#" class="btn btn-danger delete-btn" data-etudiant-id="{{ $etudiant->id }}" data-etudiant-nom="{{ $etudiant->nom }}">Supprimer</a>
    </div>
</div>

@include('modals.modal', ['etudiant' => $etudiant->nom])
@endsection