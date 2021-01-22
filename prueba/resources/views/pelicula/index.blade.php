<h1>Listado de películas</h1>
<ul>
@foreach ($peliculas as $pelicula)
    <li>{{$pelicula }} <a href="{{url('/peliculas/1')}}">Detalles</a> </li>
@endforeach
</ul>

<a href="{{url('/peliculas/create')}}">Crear pelicula</a>

