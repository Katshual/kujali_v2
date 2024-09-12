
@foreach($tarifs as $tarif)
    <h2>{{ $tarif->titre }}</h2>
    <p>Prix : {{ $tarif->prix }}€</p>
@endforeach
