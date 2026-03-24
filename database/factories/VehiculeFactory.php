<?php

namespace Database\Factories;

use App\Models\Vehicule;
use App\Models\Categorie; // <--- N'oubliez pas d'importer le modèle Categorie
use Illuminate\Database\Eloquent\Factories\Factory;

class VehiculeFactory extends Factory
{
    protected $model = Vehicule::class;

    public function definition(): array
    {
        return [
            'marque' => fake()->company(),
            'modele' => fake()->word(),
            'nb_places' => fake()->numberBetween(2, 7),
            'categorie_id' => Categorie::all()->random()->id,
        ];
    }
}
