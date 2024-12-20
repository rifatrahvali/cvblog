<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Rıfat',
            'surname' => 'Rahvalı',
            'role_id' => 1,
            'email' => 'rifatrahvali@outlook.com',
            'password'=> bcrypt('Admin123.'),
        ]);
    }
}
