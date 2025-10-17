<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        Author::create([
            'name' => 'J.K. Rowling',
            'bio' => 'Penulis seri novel fantasi Harry Potter.'
        ]);
        Author::create([
            'name' => 'George R.R. Martin',
            'bio' => 'Penulis seri novel fantasi A Song of Ice and Fire.'
        ]);
        Author::create([
            'name' => 'Agatha Christie',
            'bio' => 'Penulis novel detektif yang terkenal di dunia.'
        ]);
        Author::create([
            'name' => 'Stephen King',
            'bio' => 'Penulis novel horor, fiksi supernatural, dan fantasi.'
        ]);
        Author::create([
            'name' => 'Isaac Asimov',
            'bio' => 'Penulis fiksi ilmiah dan profesor biokimia.'
        ]);
    }
}