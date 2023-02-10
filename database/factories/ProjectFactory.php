<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->company(),
            'description' => fake()->paragraph(),
            'release_at' => fake()->dateTime(),
            'img' => fake()->imageUrl(640, 480, 'animals', true),
            'repo_link' => fake()->url(),
        ];
    }
}
