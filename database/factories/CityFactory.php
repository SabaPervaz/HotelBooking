<?php

namespace Database\Factories;
use App\Models\State;

use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
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
            'state_id' => State::all()->random()->id,
        ];
    }
}
