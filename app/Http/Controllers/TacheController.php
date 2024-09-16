<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    public function index()
    {
        $taches = Tache::all();
        return response()->json($taches);
    }

    public function show($id)
    {
        $tache = Tache::findOrFail($id);
        return response()->json($tache);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'startDate' => 'required|date',
            'endDate' => 'required|date|after_or_equal:startDate',
            'status' => 'required|string|in:not started,in progress,completed',
            'assigned_by' => 'required|exists:administrateurs,id',
            'accomplished_by' => 'required|exists:stagiaires,id',
        ]);

        $tache = Tache::create($validated);
        return response()->json($tache, 201);
    }

    public function update(Request $request, $id)
    {
        $tache = Tache::findOrFail($id . ',taskID');

        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'startDate' => 'sometimes|required|date',
            'endDate' => 'sometimes|required|date|after_or_equal:startDate',
            'status' => 'required|string|in:not started,in progress,completed',
            'assigned_by' => 'required|exists:administrateurs,id',
            'accomplished_by' => 'required|exists:stagiaires,id',
        ]);

        $tache->update($validated);
        return response()->json($tache);
    }

    public function destroy($id)
    {
        Tache::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
