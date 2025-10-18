<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        
        return response()->json([
            'status' => 'success',
            'data' => $genres
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 400);
        }

        $genre = Genre::create($request->all());

        return response()->json([
            'status' => 'success',
            'data' => $genre
        ], 201);
    }
}