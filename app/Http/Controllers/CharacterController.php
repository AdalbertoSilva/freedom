<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;

class CharacterController extends Controller
{
    public function index()
    {
        return Character::all();
    }

    public function show(Technique $character)
    {
        return $character;
    }

    public function store(Request $request)
    {
        $character = Character::create($request->all());

        return response()->json($character, 201);
    }

    public function update(Request $request, Character $character)
    {
        $character->update($request->all());

        return response()->json($character, 200);
    }

    public function delete(Character $character)
    {
        $character->delete();

        return response()->json($character, 204);
    }
}
