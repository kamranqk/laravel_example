<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WorkexperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'companyName' => $this->faker->sentence,
            'position' => $this->faker->sentence,
            'responsibility' => $this->faker->paragraph,
            'startDate' => $this->faker->date,
            'endDate' => $this->faker->date,
        ];
    }
}
