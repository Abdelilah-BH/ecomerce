<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description'=> $this->faker->text(),
            'price'=> $this->faker->randomNumber(2),
            'rating' => $this->faker->numberBetween(0, 10),
            'discount' => $this->faker->numberBetween(0, 100),
            'brand' => $this->faker->company(),
            'stock' => $this->faker->numberBetween(0, 999),
            'hidden'=> $this->faker->boolean(),
            'availability'=> $this->faker->boolean(),
            'state' => $this->faker->randomElement(["Neuf", "Occasion"]),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
