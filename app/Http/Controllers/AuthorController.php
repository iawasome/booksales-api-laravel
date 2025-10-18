<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all(); 
        
        return response()->json([
            'status' => 'success',
            'data' => $authors
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'photo' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 400);
        }

        $author = Author::create($request->all());

        return response()->json([
            'status' => 'success',
            'data' => $author
        ], 201);
    }
}