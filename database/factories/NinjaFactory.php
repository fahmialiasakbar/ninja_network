<?php

namespace Database\Factories;

use App\Models\Dojo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ninja>
 */
class NinjaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'bio' => fake()->realText(100),
            'skill' =>  fake()->numberBetween(65, 100),
            'dojo_id' => Dojo::inRandomOrder()->first()->id,
        ];
    }
}
