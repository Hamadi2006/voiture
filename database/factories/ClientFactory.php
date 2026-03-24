<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nom' => fake()->name(),
            'telephone' => fake()->numerify('06########'),
             'email' => fake()->unique()->safeEmail(),
        ];
    }
}
