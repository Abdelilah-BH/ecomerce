<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categories>
 */
class CategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name(),
            'description'=> $this->faker->paragraph(),
            'order'=>$this->faker->unique()->biasedNumberBetween($min = 1, $max = 10),
            'status'=>$this->faker->boolean()
        ];
    }
}
