@extends('layouts.app')
@section('title', config('app.name'))
@section('titleHeader', 'Étudiants')
@section('content')

<nav>
    <a href="{{ route('etudiants.create') }}" class="btn btn-outline-info">Ajouter un étudiant</a>
</nav>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Détail</th>
            <th>Modification rapide</th>
            <th>Suppression</th>
        </tr>
    </thead>
    <tbody>
        @foreach($etudiants as $etudiant)
        <tr>
            <td>{{$etudiant->nom}}</td>
            <td><a href="{{ route('etudiants.show', $etudiant->id) }}" class="btn btn-info">Détail</a></td>
            <td><a href="{{ route('etudiants.edit', $etudiant->id) }}" class="btn btn-success">Modifier</a></td>
            <td><a href="#" class="btn btn-danger delete-btn" data-etudiant-id="{{ $etudiant->id }}" data-etudiant-nom="{{ $etudiant->nom }}">Supprimer</a></td>
            @include('modals.modal', ['etudiant' => $etudiant->nom])
        </tr>

        @endforeach
    </tbody>
</table>
{{ $etudiants }}


@endsection