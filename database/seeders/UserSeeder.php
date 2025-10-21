<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate(); 

        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password123'),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'Budi',
            'email' => 'budi@user.com',
            'password' => Hash::make('password123'),
            'role' => 'user'
        ]);
    }
}