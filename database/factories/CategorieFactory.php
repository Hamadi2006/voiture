<?php

namespace Database\Factories;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends Factory<Category>
 */
class CategorieFactory extends Factory
{
    protected $model = Categorie::class;

    public function definition(): array
    {
        return [
            'libelle' => fake()->word(),
            'prix_jour' => fake()->randomFloat(2, 100, 1000),
        ];
    }
}