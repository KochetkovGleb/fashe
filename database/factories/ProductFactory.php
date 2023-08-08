<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word();

        return [
            'name' => $name,
            'slug'  => $name,
            'price' => $this->faker->numberBetween(100, 5000),
            'description' => $this->faker->paragraph(),
            'category_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
