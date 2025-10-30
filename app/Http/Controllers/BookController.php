<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with(['author', 'genre'])->get(); 
        
        return response()->json([
            'status' => 'success',
            'data' => $books
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'author_id' => 'required|exists:authors,id',
            'genre_id' => 'required|exists:genres,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
        }

        $book = Book::create($request->all());

        return response()->json([
            'status' => 'success',
            'data' => $book
        ], 201);
    }

    public function show(Book $book)
    {
        $book->load(['author', 'genre']);
        
        return response()->json([
            'status' => 'success',
            'data' => $book
        ]);
    }

    public function update(Request $request, Book $book)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'author_id' => 'required|exists:authors,id',
            'genre_id' => 'required|exists:genres,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 422);
        }

        $book->update($request->all());

        return response()->json([
            'status' => 'success',
            'data' => $book
        ]);
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Book deleted successfully'
        ]);
    }
}