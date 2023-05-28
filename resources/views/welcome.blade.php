@extends('layouts.app')
@section('title', config('app.name'))
@section('titleHeader', config('app.name'))
@section('content')
<div class="row">
    <div class="col-12 text-center">
        <p>Consulter la liste des Étudiants du collège</p>
        <a href="{{ route('etudiants.index') }}" class="btn btn-outline-primary">Afficher les étudiants</a>
    </div>
</div>
@endsection