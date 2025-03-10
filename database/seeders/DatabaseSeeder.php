<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pelanggan;
use App\Models\Laundry;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            "name" => "Ferdi Hasan",
            "email" => "ferdihasanpwd@gmail.com",
            "password" => bcrypt('12345678'),
        ]);

        Pelanggan::factory(10)->create();
        Laundry::factory(5)->create();
    }
}
