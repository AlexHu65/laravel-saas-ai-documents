<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    protected $model = \App\Models\Plan::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'price_mxn' => $this->faker->numberBetween(100, 5000),
            'ia_request_limit' => $this->faker->numberBetween(10, 1000),
            'user_limit' => $this->faker->numberBetween(1, 100),
            'is_active' => $this->faker->boolean(true),
            'features' => [
                'feature_a' => $this->faker->boolean(),
                'feature_b' => $this->faker->boolean(),
                'feature_c' => $this->faker->boolean(),
            ],
        ];
    }
}
