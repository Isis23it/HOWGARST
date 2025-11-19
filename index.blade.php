@extends('layouts.app')

@section('content')

@php
function houseIcon($house) {
$icons = [
'Gryffindor' => 'img/houses/gryffindor.jpg',
'Slytherin' => 'img/houses/slytherin.jpg',
'Ravenclaw' => 'img/houses/ravenclaw.jpg',
'Hufflepuff' => 'img/houses/hufflepuff.jpg',
];

return asset($icons[$house] ?? 'img/houses/unknown.png');
}
@endphp

<h1>Personajes</h1>

<div style="display:flex; flex-wrap:wrap; gap:20px;">
  @foreach ($characters as $character)
  <div class="card"
    style="width:220px; padding:10px; border-radius:10px; background:#222; color:white; text-align:center;">

    {{-- Imagen o icono --}}
    @if (!empty($character['image']))
    <img src="{{ $character['image'] }}"
      style="width:180px; height:180px; object-fit:cover; border-radius:10px;">
    @else
    <img src="{{ houseIcon($character['house']) }}"
      style="width:180px; height:180px; object-fit:cover; border-radius:10px;">
    @endif

    <h2 style="margin-top:10px;">{{ $character['name'] }}</h2>
    <p><strong>Casa:</strong> {{ $character['house'] ?: 'Desconocida' }}</p>

    <a href="{{ route('characters.show', $character['id']) }}"
      style="color:#00aaff;">Ver detalles</a>
  </div>
  @endforeach
</div>

@endsection