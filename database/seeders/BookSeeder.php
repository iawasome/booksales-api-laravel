<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Harry Potter and the Philosopher\'s Stone',
            'description' => 'Buku pertama dari seri Harry Potter.',
            'price' => 150000.00,
            'stock' => 100,
            'genre_id' => 1,
            'author_id' => 1
        ]);
        Book::create([
            'title' => 'A Game of Thrones',
            'description' => 'Buku pertama dari A Song of Ice and Fire.',
            'price' => 250000.00,
            'stock' => 50,
            'genre_id' => 1,
            'author_id' => 2
        ]);
        Book::create([
            'title' => 'Murder on the Orient Express',
            'description' => 'Kasus terkenal Hercule Poirot.',
            'price' => 95000.00,
            'stock' => 75,
            'genre_id' => 1,
            'author_id' => 3
        ]);
        Book::create([
            'title' => 'It',
            'description' => 'Kisah horor tentang badut menakutkan.',
            'price' => 180000.00,
            'stock' => 40,
            'genre_id' => 1,
            'author_id' => 4
        ]);
        Book::create([
            'title' => 'Foundation',
            'description' => 'Buku pertama dari seri Foundation.',
            'price' => 130000.00,
            'stock' => 60,
            'genre_id' => 3,
            'author_id' => 5
        ]);
    }
}