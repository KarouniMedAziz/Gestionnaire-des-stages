<?php

namespace App\Http\Controllers;

use App\Models\Communication;
use Illuminate\Http\Request;

class CommunicationController extends Controller
{
    public function index()
    {
        $communications = Communication::all();
        return response()->json($communications);
    }

    public function show($id)
    {
        $communication = Communication::findOrFail($id);
        return response()->json($communication);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'sender' => 'required|exists:users,id',
            'receiver' => 'required|exists:users,id',
            'messageContent' => 'required|string',
            'timestamp' => 'nullable|date',
        ]);

        $communication = Communication::create($validated);
        return response()->json($communication, 201);
    }

    public function update(Request $request, $id)
    {
        $communication = Communication::findOrFail( $id . ',messageID');

        $validated = $request->validate([
            'sender' => 'required|exists:users,id',
            'receiver' => 'required|exists:users,id',
            'messageContent' => 'required|string',
            'timestamp' => 'nullable|date',
        ]);

        $communication->update($validated);
        return response()->json($communication);
    }

    public function destroy($id)
    {
        Communication::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
