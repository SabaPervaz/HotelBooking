<?php

namespace Database\Factories;
use App\Models\Country;

use Illuminate\Database\Eloquent\Factories\Factory;

class StateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'country_id' => Country::all()->random()->id,
        ];
    }
}
