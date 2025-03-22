@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Modifier le tarif</h2>

    <form action="{{ url('tarifs/'.$tarifs->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" titre="titre" value="{{ $tarifs->titre }}" required>
        </div>

        <div class="form-group">
            <label for="prix">Prix</label>
            <textarea class="form-control" id="prix" name="prix" rows="3" required>{{ $tarifs->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ url('tarifs') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
