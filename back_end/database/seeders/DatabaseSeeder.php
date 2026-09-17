<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Voitures;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Voitures::create([
            'name' => 'audi 450',
            'type' => 'berline',    
            'marque' => 'Audi',
            'place' => 5,   
            'prix' => 50000,
            'photo' => 'images/voitures/audi.avif'    

        ]);
        Voitures::create([
            'name' => 'audi 450',
            'type' => 'berline',    
            'marque' => 'Audi',
            'place' => 5,   
            'prix' => 50000,
            'photo' => 'images/voitures/OIP.webp'    

        ]);
        Voitures::create([
            'name' => 'audi 450',
            'type' => 'berline',    
            'marque' => 'Audi',
            'place' => 5,   
            'prix' => 50000,
            'photo' => 'images/voitures/audi.avif'    

        ]);
        Voitures::create([
            'name' => 'audi 450',
            'type' => 'berline',    
            'marque' => 'Audi',
            'place' => 5,   
            'prix' => 50000,
            'photo' => 'images/voitures/OIP.webp'    

        ]);
        }
}
