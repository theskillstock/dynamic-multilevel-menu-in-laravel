<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Admin::factory()->create([
            'fname' => 'Admin',
            'lname' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'unique_code' => '415267',
            'password' => Hash::make('admin1234'),
            'image' => 'default.png',
            'role' => '1',
        ]);
    }
}
