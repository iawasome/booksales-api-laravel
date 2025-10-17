<?php

namespace App\Models;

class Genre
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'Fiction'],
            ['id' => 2, 'name' => 'Science Fiction'],
            ['id' => 3, 'name' => 'Fantasy'],
            ['id' => 4, 'name' => 'Romance'],
            ['id' => 5, 'name' => 'Mystery'],
        ];
    }
}
