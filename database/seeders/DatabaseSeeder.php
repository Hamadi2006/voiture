<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// Modifiez l'import ici pour correspondre à la classe appelée plus bas
use Database\Seeders\CategorieSeeder; 
use Database\Seeders\ClientSeeder;
use Database\Seeders\OptionSeeder;
use Database\Seeders\VehiculeSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ClientSeeder::class,
            CategorieSeeder::class,
            OptionSeeder::class,
            VehiculeSeeder::class,
        ]);
    }
}
