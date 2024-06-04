<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Unit;
use App\Models\Category;
use App\Models\Testimony;
use App\Models\Transaction;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
         User::create([
            'username'       => 'bayu',
            'name'           => 'Bayu Waskitha',
            'email'          => 'Bayuwaskitho@gmail.com',
            'password'       => bcrypt('bayu123'),
            'email_verified_at' => now()
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


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
