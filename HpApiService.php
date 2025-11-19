<?php

namespace App\Services;

use GuzzleHttp\Client;

class HpApiService
{
  protected Client $client;
  protected string $baseUrl = 'https://hp-api.onrender.com/api/';

  public function __construct()
  {
    $this->client = new Client([
      'base_uri' => $this->baseUrl,
      'timeout'  => 10.0,
    ]);
  }

  // Obtiene TODOS los personajes
  public function getAllCharacters(): array
  {
    $response = $this->client->get('characters');
    return json_decode($response->getBody()->getContents(), true);
  }

  // 🔥 Busca un personaje por su ID dentro de todos los personajes
  public function getCharacterById(string $id): ?array
  {
    $characters = $this->getAllCharacters();

    foreach ($characters as $character) {
      if ($character['id'] === $id) {
        return $character;
      }
    }

    return null; // Si no existe
  }

  // Obtiene todos los hechizos
  public function getAllSpells(): array
  {
    $response = $this->client->get('spells');
    return json_decode($response->getBody()->getContents(), true);
  }
}
