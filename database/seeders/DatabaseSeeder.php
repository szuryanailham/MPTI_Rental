<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Unit;
use App\Models\Category;
use App\Models\Testimony;
use App\Models\Transaction;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'username' => 'admin',
            'name' => 'Yearina Mustika',
            'email' => 'yearina.mustika@gmail.com',
            'password' => bcrypt('admin'),
            'email_verified_at' => now()
        ]);

        Unit::factory(20)->create(); 

        Category::create([
            'slug' => 'car',
            'name' => 'Car'
        ]);

        Category::create([
            'slug' => 'motorcycle',
            'name' => 'Motorcycle'
        ]);

        Transaction::factory(10)->create();

        Testimony::factory(10)->create();


    }
}
