<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehicule;
use App\Models\Option;

class VOptionSeeder extends Seeder
{
    public function run(): void
    {
        $options = Option::all();

        Vehicule::all()->each(function ($vehicule) use ($options) {
            $vehicule->options()->attach(
                $options->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
