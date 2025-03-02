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

        \App\Models\User::factory()->create([
          'name' => 'Test User',
          'email' => 'test@example.com',
          'is_admin' => true
        ]);
        \App\Models\User::factory()->create([
          'name' => 'Test User',
          'email' => 'test2@example.com',
        ]);
        \App\Models\Income::factory(5)->create();
        \App\Models\Expense::factory(5)->create();
        \App\Models\Budget::factory(5)->create();
        \App\Models\Plan::factory(5)->create();

    }
}