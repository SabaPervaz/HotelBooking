<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Teacher;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->paragraph(1),
            'desc' => $this->faker->paragraph(6),
            'teacher_id' => Teacher::all()->random()->id,
        ];
    }
}
