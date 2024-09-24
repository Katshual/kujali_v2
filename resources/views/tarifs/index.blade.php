
@foreach($tarifs as $tarif)
    <h2>{{ $tarif->titre }}</h2>
    <p>Prix : {{ $tarif->prix }}€</p>
    <form action="{{ url('tarifs/'.$tarif->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
@endforeach
