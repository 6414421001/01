<?php

namespace App\Http\Controllers;

use App\Models\Mu;
use Illuminate\Http\Request;

class MuAPIController extends Controller
{
    // Get all records
    public function index()
    {
        return response()->json(Mu::all(), 200);
    }

    // Store a newly created resource
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // Add other fields validation as required
        ]);

        $mu = Mu::create($validatedData);
        return response()->json($mu, 201);
    }

    // Display the specified resource by ID
    public function show($id)
    {
        $mu = Mu::find($id);

        if ($mu) {
            return response()->json($mu, 200);
        } else {
            return response()->json(['message' => 'Resource not found'], 404);
        }
    }

    // Update the specified resource
    public function update(Request $request, $id)
    {
        $mu = Mu::find($id);

        if ($mu) {
            $validatedData = $request->validate([
                'name' => 'string|max:255',
                // Add other fields validation as required
            ]);

            $mu->update($validatedData);
            return response()->json($mu, 200);
        } else {
            return response()->json(['message' => 'Resource not found'], 404);
        }
    }

    // Remove the specified resource
    public function destroy($id)
    {
        $mu = Mu::find($id);

        if ($mu) {
            $mu->delete();
            return response()->json(['message' => 'Resource deleted'], 200);
        } else {
            return response()->json(['message' => 'Resource not found'], 404);
        }
    }

    // Search for a resource by name
    public function search($name)
    {
        $result = Mu::where('name', 'like', '%' . $name . '%')->get();

        if ($result->isEmpty()) {
            return response()->json(['message' => 'No results found'], 404);
        }

        return response()->json($result, 200);
    }
}