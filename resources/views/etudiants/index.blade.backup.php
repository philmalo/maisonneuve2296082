@extends('layouts.app')
@section('title', config('app.name'))
@section('titleHeader', 'Étudiants')
@section('content')
<div class="row">
    <div class="col-8">
        <p>Cliquez sur L'étudiant </p>
    </div>

</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Liste des étudiants</h4>
            </div>
            @forelse($etudiants as $etudiant)
            <div class="card-body"> 
            <a href="{{ route('etudiants.show', $etudiant->id) }}">{{ $etudiant->nom }}</a>
            </div>
            @empty
            <p>Aucun étudiant à afficher</p>
            @endforelse
        </div>
    </div>
</div>
@endsection