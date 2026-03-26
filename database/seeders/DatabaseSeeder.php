<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CategorieSeeder; 
use Database\Seeders\ClientSeeder;
use Database\Seeders\OptionSeeder;
use Database\Seeders\VehiculeSeeder;
use Database\Seeders\VOptionSeeder;


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ClientSeeder::class,
            CategorieSeeder::class,
            OptionSeeder::class,
            VehiculeSeeder::class,
             VOptionSeeder::class, 
        ]);
    }
}
