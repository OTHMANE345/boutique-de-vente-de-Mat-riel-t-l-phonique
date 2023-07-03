<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'quantity' => $this->faker->randomFloat(2, 1, 1000),

            'total' => $this->faker->randomFloat(2, 1, 1000),
            'product_name' => $this->faker->name(),
            'status' => $this->faker->randomElement(['pending', 'approved', 'shipped']),


            'product_id' => $this->faker->numberBetween($min = 1,$max = 10),
            'user_id' => $this->faker->numberBetween($min = 1,$max = 10),

        ];
    }
}
