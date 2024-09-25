
@foreach($prestations as $prestation)
<div>
        <h2>{{ $prestation->nom}}</h2>
        <p>{{ $prestation->description }}</p>

        <form action="{{ url('prestations/'.$prestation->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
</div>
@endforeach


