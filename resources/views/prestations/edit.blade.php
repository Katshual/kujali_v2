@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Modifier la Prestation</h2>

    <form action="{{ url('prestations/'.$prestation->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nom">Nom de la Prestation</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $prestation->nom }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $prestation->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ url('prestations') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
