<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Technique;

class TechniqueController extends Controller
{
    public function index()
    {
        return Technique::all();
    }

    public function show(Technique $technique)
    {
        return $technique;
    }

    public function store(Request $request)
    {
        $technique = Technique::create($request->all());

        return response()->json($technique, 201);
    }

    public function update(Request $request, Technique $technique)
    {
        $technique->update($request->all());

        return response()->json($technique, 200);
    }

    public function delete(Technique $technique)
    {
        $technique->delete();

        return response()->json($technique, 204);
    }
}
