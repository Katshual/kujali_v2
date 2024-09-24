
@foreach($prestations as $prestation)
    <h2>{{ $prestation->nom }}</h2>
    <p>Description : {{ $prestation->description}}</p>
    <form action="{{ url('prestations/'.$prestation>id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
@endforeach
