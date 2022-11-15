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
        return [
            'title' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(10000, 100000),
            'created_at' => $this->faker->dateTimeBetween("-6 month" , now()),
        ];
    }
}
