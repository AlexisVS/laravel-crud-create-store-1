<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PokemonController extends Controller
{
    public function index()
    {

        return view("pages.createPokemon");
    }

    public function store(Request $request)
    {
        $store = new Pokemon();
        $store->name = $request->pokemonName;
        $store->type = $request->pokemonType;
        $store->level = $request->pokemonLevel;
    }
}
