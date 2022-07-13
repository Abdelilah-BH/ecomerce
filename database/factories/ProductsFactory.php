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
            'sku' => $this->faker->randomNumber(10),
            'name' => $this->faker->name(),
            'graphics' => $this->faker->name(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomNumber(2),
            'rating' => $this->faker->numberBetween(0, 10),
            'discount' => $this->faker->numberBetween(0, 100),
            'brand' => $this->faker->company(),
            'tag' => $this->faker->name(),
            'weight' => $this->faker->numberBetween(0, 50),
            'stock' => $this->faker->numberBetween(0, 999),
            'hidden' => $this->faker->boolean(),
            'availability' => $this->faker->boolean(),
            'status' => $this->faker->randomElement(["Neuf", "Occasion"]),
            'type_disque_dur' => $this->faker->randomElement(["SSD", "HDD"]),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
