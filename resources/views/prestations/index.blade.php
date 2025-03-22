
@foreach($prestations as $prestation)
<div>
        <h2>{{ $prestation->nom}}</h2>
        <p>{{ $prestation->description }}</p>

        <form action="{{ url('prestations/'.$prestation->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <a href="{{ url('prestations/'.$prestation->id.'/edit') }}" class="btn btn-primary">Modifier</a>
</div>
@endforeach


