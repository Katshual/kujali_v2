@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Modifier la Biographie</h2>

    <form action="{{ url('biographie/'.$biographies->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="contenu">Contenu</label>
            <input type="text" class="form-control" id="contenu" name="contenu" value="{{ $biographies->contenu }}" required>
        </div>
        <div class="form-group">
            <label for="contenu">Contenu</label>
            <textarea class="form-control" id="contenu" name="contenu" rows="3" required>{{ $biographies->contenu }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Mettre à jour</button>
        <a href="{{ url('biographie') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
