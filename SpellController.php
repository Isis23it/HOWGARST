<?php

namespace App\Http\Controllers;

use App\Services\HpApiService;
use Illuminate\Http\Request;

class SpellController extends Controller
{
  private HpApiService $hpApi;

  public function __construct(HpApiService $hpApi)
  {
    $this->hpApi = $hpApi;
  }

  public function index()
  {
    $spells = $this->hpApi->getAllSpells();
    return view('spells.index', compact('spells'));
  }
}
