<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre; // <-- IMPORT

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('genre', ['genres' => $genres]);
    }
}