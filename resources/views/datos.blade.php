<h1>Datos obtenidos de la API</h1>

<ul>
    @foreach ($datos as $dato)
        <li>{{ $dato->nombre }} - {{ $dato->valor }}</li>
    @endforeach
</ul>
