<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use Illuminate\Http\Request;

class CandidatureController extends Controller
{
    public function index()
    {
        $candidatures = Candidature::all();
        return response()->json($candidatures);
    }

    public function show($id)
    {
        $candidature = Candidature::findOrFail($id);
        return response()->json($candidature);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'stagiaire_id' => 'required|exists:stagiaires,id',
            'submissionDate' => 'required|date',
            'status' => 'required|string|in:en attente,accepté,refusé',
            'CV' => 'required|string',
            'keywords' => 'nullable|array',
        ]);

        $candidature = Candidature::create($validated);
        return response()->json($candidature, 201);
    }

    public function update(Request $request, $id)
    {
        $candidature = Candidature::findOrFail($id . ',applicationID');

        $validated = $request->validate([
            'stagiaire_id' => 'required|exists:stagiaires,id',
            'submissionDate' => 'required|date',
            'status' => 'required|string|in:en attente,accepté,refusé',
            'CV' => 'nullable|string',
            'keywords' => 'nullable|array',
        ]);

        $candidature->update($validated);
        return response()->json($candidature);
    }

    public function destroy($id)
    {
        Candidature::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
