<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
use Illuminate\Http\Request;

class AdministrateurController extends Controller
{
    public function index()
    {
        $administrateurs = Administrateur::all();
        return response()->json($administrateurs);
    }

    public function show($id)
    {
        $administrateur = Administrateur::findOrFail($id);
        return response()->json($administrateur);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'userID' => 'required|exists:users,id',
        ]);

        $administrateur = Administrateur::create($validated);
        return response()->json($administrateur, 201);
    }

    public function update(Request $request, $id)
    {
        $administrateur = Administrateur::findOrFail($id);

        $validated = $request->validate([
            'userID' => 'required|exists:users,id',
        ]);

        $administrateur->update($validated);
        return response()->json($administrateur);
    }

    public function destroy($id)
    {
        Administrateur::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}

