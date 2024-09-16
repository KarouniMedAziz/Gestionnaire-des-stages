<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    public function index()
    {
        $stagiaires = Stagiaire::all();
        return response()->json($stagiaires);
    }

    public function show($id)
    {
        $stagiaire = Stagiaire::findOrFail($id);
        return response()->json($stagiaire);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'userID' => 'required|exists:users,id',
            'fieldOfStudy' => 'required|string|max:255',
            'levelOfStudy' => 'required|string|max:255',
        ]);

        $stagiaire = Stagiaire::create($validated);
        return response()->json($stagiaire, 201);
    }

    public function update(Request $request, $id)
    {
        $stagiaire = Stagiaire::findOrFail(id: $id);

        $validated = $request->validate([
            'userID' => 'required|exists:users,id',
            'fieldOfStudy' => 'required|string|max:255',
            'levelOfStudy' => 'required|string|max:255',
        ]);

        $stagiaire->update($validated);
        return response()->json($stagiaire);
    }

    public function destroy($id)
    {
        Stagiaire::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
