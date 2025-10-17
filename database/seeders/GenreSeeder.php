<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        Genre::create(['name' => 'Fiksi', 'description' => 'Cerita rekaan atau khayalan.']);
        Genre::create(['name' => 'Non-Fiksi', 'description' => 'Berdasarkan fakta dan kenyataan.']);
        Genre::create(['name' => 'Sains Fiksi', 'description' => 'Fiksi dengan elemen sains dan teknologi.']);
        Genre::create(['name' => 'Horor', 'description' => 'Cerita yang menimbulkan rasa takut.']);
        Genre::create(['name' => 'Romansa', 'description' => 'Cerita dengan fokus pada hubungan cinta.']);
    }
}