<?php

namespace App\Http\Controllers;

use App\Services\HpApiService;

class CharacterController extends Controller
{
  protected $service;

  public function __construct(HpApiService $service)
  {
    $this->service = $service;
  }

  public function index()
  {
    $characters = $this->service->getAllCharacters();

    return view('characters.index', compact('characters'));
  }

  public function show($id)
  {
    $character = $this->service->getCharacterById($id);

    if (!$character) {
      abort(404, 'Personaje no encontrado');
    }

    return view('characters.show', compact('character'));
  }
}
