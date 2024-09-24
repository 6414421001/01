<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumAPIController extends Controller
{
    // Get all albums
    public function index()
    {
        return response()->json(Album::all(), 200);
    }

    // Store a newly created album
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // Add other field validations if necessary
        ]);

        $album = Album::create($validatedData);
        return response()->json($album, 201);
    }

    // Display the specified album by id
    public function show($id)
    {
        $album = Album::find($id);

        if ($album) {
            return response()->json($album, 200);
        } else {
            return response()->json(['message' => 'Album not found'], 404);
        }
    }

    // Update the specified album
    public function update(Request $request, $id)
    {
        $album = Album::find($id);

        if ($album) {
            $validatedData = $request->validate([
                'name' => 'sometimes|required|string|max:255',
                // Add other field validations if necessary
            ]);

            $album->update($validatedData);
            return response()->json($album, 200);
        } else {
            return response()->json(['message' => 'Album not found'], 404);
        }
    }

    // Remove the specified album
    public function destroy($id)
    {
        $album = Album::find($id);

        if ($album) {
            $album->delete();
            return response()->json(['message' => 'Album deleted'], 200);
        } else {
            return response()->json(['message' => 'Album not found'], 404);
        }
    }

    // Search for albums by name
    public function search($name)
    {
        $results = Album::where('name', 'like', '%' . $name . '%')->get();

        if ($results->isEmpty()) {
            return response()->json(['message' => 'No albums found'], 404);
        }

        return response()->json($results, 200);
    }
}
