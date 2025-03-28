<!-- resources/views/biographies/index.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biographie</title>
</head>
<body>
    <h1>Biographie du Praticien</h1>

    @foreach($biographies as $biographie)
        <div>

            <p>{{ $biographie->contenu }}</p>
            <form action="{{ url('biographie/'.$biographie->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <a href="{{ url('biographie/'.$biographie->id.'/edit') }}" class="btn btn-primary">Modifier</a>

        </div>
    @endforeach

    <a href="{{ route('tarifs.index') }}">Voir les tarifs</a>
</body>
</html>
