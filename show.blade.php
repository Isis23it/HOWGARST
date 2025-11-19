@extends('layouts.app')

@section('content')
<h1>{{ $character['name'] }}</h1>

<div class="card">
  <p><strong>Especie:</strong> {{ $character['species'] }}</p>
  <p><strong>Género:</strong> {{ $character['gender'] }}</p>
  <p><strong>Casa:</strong> {{ $character['house'] ?: 'Desconocida' }}</p>
  <p><strong>Año de nacimiento:</strong> {{ $character['yearOfBirth'] ?: 'Desconocido' }}</p>

  <h3>Varita (Wand) — Nivel 2</h3>
  @if (isset($character['wand']))
  <ul>
    <li><strong>Madera:</strong> {{ $character['wand']['wood'] ?: 'N/A' }}</li>
    <li><strong>Núcleo:</strong> {{ $character['wand']['core'] ?: 'N/A' }}</li>
    <li><strong>Longitud:</strong> {{ $character['wand']['length'] ?: 'N/A' }}</li>
  </ul>
  @else
  <p>No tiene varita registrada.</p>
  @endif

  <h3>Nombres alternativos — Nivel 3</h3>
  @if (!empty($character['alternate_names']))
  <ul>
    @foreach ($character['alternate_names'] as $alt)
    <li>{{ $alt }}</li>
    @endforeach
  </ul>
  @else
  <p>No hay nombres alternativos.</p>
  @endif

  <h3>Actores alternativos — Nivel 3</h3>
  @if (!empty($character['alternate_actors']))
  <ul>
    @foreach ($character['alternate_actors'] as $actor)
    <li>{{ $actor }}</li>
    @endforeach
  </ul>
  @else
  <p>No hay actores alternativos.</p>
  @endif

  <h3>Patrón (Patronus)</h3>
  <p>{{ $character['patronus'] ?: 'Desconocido' }}</p>
</div>

<a href="{{ route('characters.index') }}">← Volver a la lista</a>
@endsection