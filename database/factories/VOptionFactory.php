<?php

namespace Database\Factories;

use App\Models\Vehicule;
use App\Models\Option;
use Illuminate\Database\Eloquent\Factories\Factory;

class VOptionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'vehicule_id' => Vehicule::all()->random()->id,
            'option_id' => Option::all()->random()->id,
        ];
    }
}

